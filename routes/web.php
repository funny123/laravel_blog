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
    return 888;
});

Route::get('token',function(){
    return 'token';
})->middleware('token');

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('blog/{slug}','BlogController@showPost')->name('blog.detail');