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

/////////Home&Ungrouped///////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::get('/', 'HomeController@dashboard');
});

//////////////Items///////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/items', 'ItemsController@index');
    Route::post('/items', 'ItemsController@search');
    Route::post('/items/add', 'ItemsController@store');
});

////////////////Users//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/members', 'UserController@index');
    Route::get('/members/{user}', 'UserController@show');
});
