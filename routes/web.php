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

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@index'])->middleware('auth');
Route::get('stock', ['as' => 'stock', 'uses' => 'StockController@index'])->middleware('auth');
Route::get('author', ['as' => 'author', 'uses' => 'AuthorController@index'])->middleware('auth');
Route::get('author/create', ['as' => 'author.create', 'uses' => 'AuthorController@create'])->middleware('auth');
Route::post('author/create', ['as' => 'author.store', 'uses' => 'AuthorController@store'])->middleware('auth');
Route::get('author/edit/{id}', ['as' => 'author.edit', 'uses' => 'AuthorController@edit'])->middleware('auth');
Route::post('author/edit/{id}', ['as' => 'author.edit', 'uses' => 'AuthorController@update'])->middleware('auth');
Route::get('author/show/{id}', ['as' => 'author.show', 'uses' => 'AuthorController@show'])->middleware('auth');
Route::get('author/destroy/{id}', ['as' => 'author.destroy', 'uses' => 'AuthorController@destroy'])->middleware('auth');
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@index']);
Route::post('/', ['as' => 'login-submit', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

