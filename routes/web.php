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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/offer','OffersController@index')->name('offer.index');
Route::get('/users','UsersController@index')->name('users.index');
Route::get('/contact','ContactController@index')->name('contact.index')->middleware('AdminPanel');

Route::get('/offer/add','OffersController@add')->name('offer.add');
Route::get('/offer/{id}/edit','OffersController@edit')->name('offer.edit')->middleware('UsersPanel');


Route::get('/users/{id}/edit','UsersController@edit')->name('users.edit')->middleware('UserEditPanel');


Route::get('/offer/{id}/index','OffersController@delete')->name('offer.delete')->middleware('UsersPanel');
Route::get('/users/{id}/index','UsersController@delete')->name('users.delete')->middleware('UserEditPanel');


Route::post('/offer/{id}/edit','OffersController@updateOffers')->name('offer.updateOffers');

Route::post('/offer/add', 'OffersController@submit')->name('add.Offer');
Route::post('/contact','ContactController@submit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
