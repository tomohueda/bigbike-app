<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageController;
use App\Http\Controllers\AboutPageController;

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

/*
Route::get('/', function () {
    //return view('welcome');
    return view('top');
});
*/

//トップページ
//Route::get('/', 'TopPageController@show');
Route::get('/',  [TopPageController::class, 'show']);

//会社概要ページ
Route::get('/about', [AboutPageController::class, 'show']);