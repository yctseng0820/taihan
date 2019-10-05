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
    Route::resource('solution','SolutionController');
    Route::resource('safety','SafetyController');
    Route::resource('about','AboutController');
});

// 前台路徑
Route::group(['middleware' => ['web'], 'namespace' => 'Front'], function(){
    // 首頁
    Route::get('/', 'IndexController@index');
    // 產品
    Route::get('/product_main', 'IndexController@product');
    Route::get('/product_main/{cate}/cate', 'IndexController@product_cate')->name('product_cate');
    Route::get('/product_main/cate/{detail}', 'IndexController@product_detail')->name('product_detail');

    // 產業
    Route::get('/solution_main', 'IndexController@solution_main');
    Route::get('/solution_detail/{id}', 'IndexController@solution_detail')->name('solution_detail');
    // 安全建議
    Route::get('/safety_advice', 'IndexController@safety_advice');
    // 最新消息
    Route::get('/announce', 'IndexController@announce');
    Route::get('/announce/{id}', 'IndexController@announce_detail')->name('announce_detail');
    // 關於我們
    Route::get('/about', 'IndexController@about');
    
});

// ROute::any('/locale',['middleware'=>['locale'], 'uses'=>'LocaleController@chooser'])->name('language-chooser');
Route::middleware(['web', 'locale'])->group(function(){
    Route::post('/locale', 'LocaleController@chooser')->name('language-chooser');
});


