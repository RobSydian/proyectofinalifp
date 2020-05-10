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
    return view('web.index');
});

Route::get('/products', function () {
    return view('web.products.products');
});
Route::get('/product', function () {
    return view('web.products.product');
});

Route::get('/about', function () {
    return view('web.about');
});


//Ruta autentificación
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::post('/login', 'ConnectController@postLogin')->name('login');
Route::get('/register', 'ConnectController@getRegister')->name('register');
Route::post('/register', 'ConnectController@postRegister')->name('register');
Route::get('/logout', 'ConnectController@getLogout')->name('logout');

//Ruta productos
// Route::get('/products', 'ProductController@getAddProduct');