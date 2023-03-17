<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use Illuminate\Support\Facades\Route;

//商品マスタ用
use App\Http\Controllers\Products\ProductCategoriesController;
use App\Http\Controllers\Products\RentalClassesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin用ルーティング
Route::prefix('admin')->name('admin.')->group(function(){
    
    // Admin用ダッシュボード
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin')->name('dashboard');

    // Admin用プロファイルページ
    Route::get('/profile', [AdminProfileController::class, 'edit'])->middleware('auth:admin')->name('profile.edit');   
    Route::patch('/profile', [AdminProfileController::class, 'update'])->middleware('auth:admin')->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->middleware('auth:admin')->name('profile.destroy');

    // 商品マスタ管理画面
    Route::get('/manage', function () {
        return view('admin.manage');
    })->middleware('auth:admin')->name('manage');

    //商品マスター系のルーティング
    Route::resource('/product_categories', ProductCategoriesController ::class, ['except' => ['show']]);
    Route::resource('/rental_classes', RentalClassesController ::class, ['except' => ['show']]);
    require __DIR__.'/admin.php';
});
