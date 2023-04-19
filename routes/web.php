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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//無効URLでリダイレクト
Route::fallback(function () {
	return redirect('/index');
});

//商品一覧ページ
Route::get('/index','ShopController@index')->name('shop');

//商品登録ページ
Route::get('/productCreate','ShopController@productCreate')->name('productCreate');

//商品登録
Route::post('/productStore','ShopController@productStore')->name('productStore');

//マイカートのページ
Route::get('/mycart','ShopController@myCart')->name('mycart')->middleware('auth');

//商品をマイカートに追加
Route::post('/addmycart','ShopController@addMycart')->name('addmycart');

//マイカートに追加した商品の削除
Route::delete('/cartdelete','ShopController@deleteCart')->name('cartdelete');

//マイカートに追加した商品の購入
Route::post('/purchase','ShopController@purchase')->name('purchase');

//購入ページをリロード
Route::get('/purchase','ShopController@redirect')->name('shop');

//管理画面の表示
Route::get('/admin','ShopController@admin')->name('admin')->middleware('auth');

//管理画面での商品の削除
Route::delete('/delete/{id}','ShopController@itemDelete')->name('delete');

//管理画面での商品の編集するページ
Route::get('/edit/{id}','ShopController@edit')->name('edit');

//管理画面での商品の更新
Route::put('/update/{stock}','ShopController@update')->name('update');