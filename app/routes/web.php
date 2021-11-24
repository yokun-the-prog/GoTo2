<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// サンプルの記述
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('posts', App\Http\Controllers\PostController::class);

// 下記追加
// 少し違う書き方できるか確認：OK
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// postsのCRUD機能を自動でルーティングしてくれるLaravel便利機能
Route::resource('posts', 'App\Http\Controllers\PostController'); 



