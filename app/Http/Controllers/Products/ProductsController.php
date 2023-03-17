<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Requests\Prouct\ProductRequest;

use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;

/* プロダクト コントローラ */
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 全件取得
        $products = Product::with('productCategory')->with('rentalClass')->orderBy('order', 'asc')->paginate(10);
        $categories = ProductCategory::orderBy('order', 'asc');
        $classes = RentalClass::orderBy('order', 'asc');

        foreach ($products as $product){
            $product;
        }

        return view (
            'product.index',
            ['products' => $products, 'categories' => $categories, 'classes' => $classes]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        $classes = RentalClass::orderBy('order', 'asc')->get();
        return view (
            'product.create',
            ['categories' => $categories, 'classes' => $classes]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
        $product = new Product;
        $product->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '登録しました');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $category_id)
    {
        //特定のカテゴリーのデータを取得
        //$category = ProductCategory::find($category_id);
        //$products = $category->products();]
        $products = Product::where('category_id', $category_id)->orderBy('order', 'asc')->paginate(10);
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        $classes = RentalClass::orderBy('order', 'asc')->get();
        return view (
            'product.index',
            ['products' => $products, 'categories' => $categories, 'classes' => $classes]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id);
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        $classes = RentalClass::orderBy('order', 'asc')->get();
        return view (
            'product.edit',
            ['product' => $product, 'categories' => $categories, 'classes' => $classes]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        //
        $product = Product::find($id);
        $product->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '編集しました');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '削除しました');

    }
}
