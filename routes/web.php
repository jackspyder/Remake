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

Route::get('/', 'HomeController@login');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/', 'HomeController@dashboard');
Route::get('/items', 'DataController@items');
