<?php
namespace App\Services;

use App\Models\Products\Product;
use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;
use App\Http\Requests\Prouct\ProductRequest;
use App\Models\Products\Image;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    //登録
    public static function createProduct(ProductRequest $request)
    {
        $product = new Product;
        $product->fill($request->all())->save();

        // 画像保存処理
        $images = $request->images();
        if (!empty($images)) {
            foreach ($images as $image) {
                Storage::putFile('public/images', $image);
                $imageModel = new Image();
                $imageModel->name = $image->hashName();
                $imageModel->save();
                $product->images()->attach($imageModel->id);
            }
        }

    }

    //全件取得（ページネーションあり）
    public static function getProducts(int $num)
    {
        // withの中はProductモデルに記述の関数名
        $products = Product::with('images')->with('productCategory')->with('rentalClass')->orderBy('order', 'asc')->paginate($num);
        return $products;
    }

    //1件取
    public static function getProduct(string $id)
    {
        $product = Product::find($id);
        return $product;
    }

    //更新
    public static function updateProduct(ProductRequest $request, string $id)
    {
        $product = Product::find($id);
        $product->fill($request->all())->save();
    }

    //削除
    public static function deleteProduct(string $id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        
        $product->images()->each(function ($image) use ($product){
            // 画像削除処理
            $filePath = 'public/images/' . $image->name;
            if(Storage::exists($filePath)){
                Storage::delete($filePath);
            }
            $product->images()->detach($image->id);
            $image->delete();
        });

        $product->delete();
    }

    //カテゴリー取得
    public static function getProductCategories()
    {
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        return $categories;
    }

    //レンタルクラス取得
    public static function getRentalClasses()
    {
        $classes = RentalClass::orderBy('order', 'asc')->get();
        return $classes;
    }

}