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

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

Route::get('/add-product','ProductController@create');
Route::post('add-product-store','ProductController@store');

Route::group(['middleware' => 'web'],function (){
    Route::get('/', function () {return view('welcome');});
    Auth::routes();
    Route::get('/product/{product}','ProductController@show');
    Route::get('page',function (){return view('page');});
    Route::get('boot',function (){return view('boot');});
});

