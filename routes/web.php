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
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@index']);
Route::post('/', ['as' => 'login-submit', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

