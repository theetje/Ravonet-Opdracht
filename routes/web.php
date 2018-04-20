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
    return view('index');
});

// Maak nieuwe order aan
Route::get('order/create', 'OrderController@create');
// Haal pagina op met juiste order
Route::get('order/{pakket_id}', 'OrderController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
