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
    Route::resource('items', 'ItemsController');
    Route::post('/specs', 'SpecsController@store');
    Route::post('/items/search', 'ItemsController@search');
    Route::post('/items/specs/search', 'ItemsController@searchspecs');
});

////////////////Users//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::resource('users', 'UsersController');
});

/////////////Receipts/////////
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::resource('receipts', 'ReceiptsController');
    Route::post('/receipts/search', 'ReceiptsController@search');
});

////////////////Customers//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::resource('customers', 'CustomersController');
});
