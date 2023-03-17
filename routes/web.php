<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use Illuminate\Support\Facades\Route;

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

    require __DIR__.'/admin.php';
});
