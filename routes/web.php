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

Route::get('/', 'ArticleController@index');
Route::get('create/', 'ArticleController@create');
Route::post('create/', 'ArticleController@store');
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('update/', 'ArticleController@update');
Route::get('confirm/{id}', 'ArticleController@confirm');
Route::post('delete/', 'ArticleController@delete');
