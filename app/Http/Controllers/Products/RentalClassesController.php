<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Prouct\RentalClassRequest;
use App\Models\Products\RentalClass;

class RentalClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //レンタルクラス一覧
        $classes = RentalClass::orderBy('order', 'asc')->paginate(10);

        return view (
            'rental.class.index',
            ['classes' => $classes]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rental.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalClassRequest $request)
    {
        //
        $class = new RentalClass;
        $class->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.rental_classes.index')->with('message', '登録しました');

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
        //レンタルクラスを探してビューに渡す
        $class = RentalClass::find($id);
        return view(
            'rental.class.edit',
            ["class" => $class]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalClassRequest $request, string $id)
    {
        //
        $class = RentalClass::find($id);
        $class->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin.rental_classes.index')->with('message', '編集しました');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        RentalClass::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('admin.rental_classes.index')->with('message', '削除しました');

    }
}
