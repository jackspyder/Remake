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
    Route::get('/additems', 'ItemsController@add');
    Route::post('/items/searchitems', 'ItemsController@searchitems');
    Route::post('/items/searchspecs', 'ItemsController@searchspecs');
    Route::post('/items/add', 'ItemsController@store');
    Route::post('/items/spec', 'SpecsController@store');
});

////////////////Users//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/members', 'UserController@index');
    Route::get('/members/{user}', 'UserController@show');

    Route::get('/members/create', 'UserController@create');

    Route::post('/members', 'UserController@store');
});

////////////////Sales//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/sales', 'SalesController@index');
    Route::get('/addsales', 'SalesController@add');
    Route::post('/sales/add', 'SalesController@store');
    Route::post('/sales/search', 'SalesController@search');

});

////////////////Customers//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/customers', 'CustomersController@index');
});
