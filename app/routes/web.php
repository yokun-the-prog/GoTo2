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


// お問合せフォーム用
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');


// コンテンツ用
//Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index'])->name('locations');

Route::get('/locations', function () {
    return view('/locations/index');
});
//Route::get('/locations', 'App\Http\Controllers\LocationController@index');
Route::get('/trips/index', 'App\Http\Controllers\TripController@index')->name('trips');
Route::get('/histories/index', 'App\Http\Controllers\HistoryController@index')->name('histories');
Route::get('/reviews/index', 'App\Http\Controllers\ReviewController@index')->name('reviews');



