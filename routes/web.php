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

Route::get('/', 'ListingsController@index');

Auth::routes();//generate all the routes required for user authentication

Route::resource('listings', 'ListingsController');//this will include all the routes in ListingsController

Route::get('/dashboard', 'DashboardController@index');
