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

use App\Events\UserWasBanned;
use App\User;

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

Route::group(['prefix'=>'admin'],function (){
    Route::get('add-product',['as'=>'add.product' , 'uses' => 'ProductController@create']);
    Route::post('add-product-store',['as'=>'product.store' , 'uses' =>'ProductController@store']);

});



Route::group(['middleware' => 'web'],function (){

    Auth::routes();

    Route::get(/**
     *
     */
        'event', function (){
        event(new UserWasBanned(new User()));
    });

    Route::get('/vue', ['as'=>'vue', 'uses'=>'ProductController@vue']);

    Route::get('/category',['as'=>'category' , 'uses'=>'CategoryController@show']);
    Route::get('/category/{category}',['as'=>'single.category' , 'uses'=>'CategoryController@single_cat']);
    Route::get('category/product/{product}', ['as'=>'show.product', 'uses'=>'ProductController@show']);
    Route::get('/product/{comment}/edit','CommentController@edit');
    Route::patch('/product/{comment}/edit/store','CommentController@store');

    Route::get('/api',function (){
        return "hello";
    })->middleware('throttle:3'); //default 60 request per minute

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('page',function (){
        return view('page');
    });
    Route::get('boot',function (){
        return view('boot');
    });
});

