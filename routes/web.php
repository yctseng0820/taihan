<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 後台路徑
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::any('index', 'AdminController@index');
    Route::resource('category','CategoryController');
    Route::resource('magnetism','MagnetismController');
    Route::resource('announce','AnnounceController');
});

// 前台路徑
Route::group(['middleware' => ['web'], 'namespace' => 'Front'], function(){
    Route::get('/', 'IndexController@index');
    Route::get('/product_main', 'IndexController@product');
    Route::get('/product_main/{cate}/cate', 'IndexController@product_cate')->name('product_cate');
    Route::get('/product_main/cate/{detail}', 'IndexController@product_detail')->name('product_detail');

});

// ROute::any('/locale',['middleware'=>['locale'], 'uses'=>'LocaleController@chooser'])->name('language-chooser');
Route::middleware(['web', 'locale'])->group(function(){
    Route::post('/locale', 'LocaleController@chooser')->name('language-chooser');
});


