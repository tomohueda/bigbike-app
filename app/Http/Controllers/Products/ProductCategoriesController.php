<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Prouct\ProductCategoryRequest;
use App\Models\Products\ProductCategory;

/* プロダクトカテゴリー コントローラ */
class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //カテゴリー一覧
        $categories = ProductCategory::all();

        return view (
            'product.category.index',
            ['categories' => $categories]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCategoryRequest $request)
    {
        //
        $category = new ProductCategory;
        $category->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product_categories.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //カテゴリーを探してビューに渡す
        $category = ProductCategory::find($id);
        return view(
            'product.category.edit',
            ["category" => $category]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductCategoryRequest $request, string $id)
    {
        //
        $category = ProductCategory::find($id);
        $category->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.product_categories.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ProductCategory::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('admin.product_categories.index')->with('message', '削除しました');
    }
}
