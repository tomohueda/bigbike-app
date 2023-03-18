<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\Prouct\ProductRequest;

/* プロダクト コントローラ */
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 全商品取得
        $products = ProductService::getProducts(10);
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();

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
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();
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
        ProductService::createProduct($request);

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '登録しました');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $category_id)
    {
        //特定のカテゴリーのデータを取得
        $products = ProductService::getProducts(10);
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();
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
        $product = ProductService::getProduct($id);
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();
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
        ProductService::updateProduct($request, $id);

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '編集しました');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ProductService::deleteProduct($id);
        // 完了メッセージを表示
        return redirect()->route('admin.product.index')->with('message', '削除しました');

    }
}
