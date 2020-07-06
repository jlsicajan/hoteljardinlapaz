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

Route::get('/', 'FrontEndController@index')->name('home');

Route::get('/nosotros', 'FrontEndController@about_us')->name('about-us');
Route::get('/hotel', 'FrontEndController@hotel')->name('hotel');
Route::get('/habitaciones', 'FrontEndController@rooms')->name('rooms');
Route::get('/servicios', 'FrontEndController@services')->name('services');
Route::get('/contactanos', 'FrontEndController@contact_us')->name('contact-us');
