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
    return view('/auth/login');
});

//cluster
Route::get('/cluster','ClusterController@index');
Route::get('/cluster/create','ClusterController@create');
Route::post('/cluster/store','ClusterController@store');
Route::get('/cluster/edit/{id}', 'ClusterController@edit');
Route::put('/cluster/update','ClusterController@update');

// users
Route::get('/user','UserController@index');
Route::get('/user/create','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/update','UserController@update');
Route::get('/tesRegis','UserController@register');

//cart
Route::get('/cart','CartController@index');
Route::post('/cart/store','CartController@store');
Route::get('/checkout','CartController@checkout');
Route::post('/checkout/success','CartController@checkoutSuccess');

//items
Route::get('/item','ItemController@index');
Route::get('/item/recomendation','ItemController@recomendation');
Route::get('/item/create','ItemController@create');
Route::get('/item/search',"ItemController@search");
Route::post('/item/hasilSearch',"ItemController@hasilSearch");
Route::post('/item/store','ItemController@store');
Route::get('/item/edit/{id}', 'ItemController@edit');
Route::put('/item/update','ItemController@update');
Route::get('/item/delete/{id}', 'ItemController@deleteStock');
Route::put('/item/updateDeleteStock','ItemController@updateDeleteStock');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
