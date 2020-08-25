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

Route::get('/', function () {
    return view('welcome');
});

//課題3 コメントのみ記載いたします。
// Route::get('XXX', 'AAA\Controller@bbb')

//課題4
Route::group(['prefix' => 'admin'], function(){
    Route::get('profile/create','Admin\ProfileController@add')>middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')>middleware('auth');
});


Route::group(['prefix' => 'admin'], function(){
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
