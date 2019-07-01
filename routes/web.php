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
Route::get('comic', ['as' => 'comic', 'uses' => 'ComicController@index'])->middleware('auth');
Route::get('comic/create', ['as' => 'comic.create', 'uses' => 'ComicController@create'])->middleware('auth');
Route::post('comic/create', ['as' => 'comic.store', 'uses' => 'ComicController@store'])->middleware('auth');
Route::get('comic/edit/{id}', ['as' => 'comic.edit', 'uses' => 'ComicController@edit'])->middleware('auth');
Route::post('comic/edit/{id}', ['as' => 'comic.edit', 'uses' => 'ComicController@update'])->middleware('auth');
Route::get('comic/show/{id}', ['as' => 'comic.show', 'uses' => 'ComicController@show'])->middleware('auth');
Route::get('comic/destroy/{id}', ['as' => 'comic.destroy', 'uses' => 'ComicController@destroy'])->middleware('auth');
Route::get('author/search', ['as' => 'author.search', 'uses' => 'ComicController@search'])->middleware('auth');
Route::get('author', ['as' => 'author', 'uses' => 'AuthorController@index'])->middleware('auth');
Route::get('author/create', ['as' => 'author.create', 'uses' => 'AuthorController@create'])->middleware('auth');
Route::post('author/create', ['as' => 'author.store', 'uses' => 'AuthorController@store'])->middleware('auth');
Route::get('author/edit/{id}', ['as' => 'author.edit', 'uses' => 'AuthorController@edit'])->middleware('auth');
Route::post('author/edit/{id}', ['as' => 'author.edit', 'uses' => 'AuthorController@update'])->middleware('auth');
Route::get('author/show/{id}', ['as' => 'author.show', 'uses' => 'AuthorController@show'])->middleware('auth');
Route::get('author/destroy/{id}', ['as' => 'author.destroy', 'uses' => 'AuthorController@destroy'])->middleware('auth');
Route::get('editor', ['as' => 'editor', 'uses' => 'EditorController@index'])->middleware('auth');
Route::get('editor/create', ['as' => 'editor.create', 'uses' => 'EditorController@create'])->middleware('auth');
Route::post('editor/create', ['as' => 'editor.store', 'uses' => 'EditorController@store'])->middleware('auth');
Route::get('editor/edit/{id}', ['as' => 'editor.edit', 'uses' => 'EditorController@edit'])->middleware('auth');
Route::post('editor/edit/{id}', ['as' => 'editor.edit', 'uses' => 'EditorController@update'])->middleware('auth');
Route::get('editor/show/{id}', ['as' => 'editor.show', 'uses' => 'EditorController@show'])->middleware('auth');
Route::get('editor/destroy/{id}', ['as' => 'editor.destroy', 'uses' => 'EditorController@destroy'])->middleware('auth');
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@index']);
Route::post('/', ['as' => 'login-submit', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

