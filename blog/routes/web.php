<?php

use Illuminate\Support\Facades\Route;

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

// Alays have the route in the right order
Route::get('/', 'RestoController@index');

Route::get('/create', 'RestoController@create');

Route::post('/resto/create', 'RestoController@store');

Route::get('/post/{id}','RestoController@show');