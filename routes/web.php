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
Route::get('admin/profile/create','ProfileController@add');

Route::get('admin/profile/edit','ProfileController@add');