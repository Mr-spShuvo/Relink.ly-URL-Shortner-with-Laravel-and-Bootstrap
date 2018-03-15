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

Route::get('/', 'PagesController@home'); //Homepage
Route::resource('link', 'URLsController'); //Routes of URLsController
Route::get('/{code}','PagesController@redirectto'); //Redirecting to URL
