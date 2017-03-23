<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::resource('countrys', 'CountrysController');
Route::resource('cities', 'CitiesController');
Route::resource('airports', 'AirportsController');
Route::get('airportsfront', 'AirportsfrontController@index');
Route::get('citiesfront', 'AirportsfrontController@cities');
Route::get('countrysfront', 'AirportsfrontController@country');
Route::get('contact', 'AirportsfrontController@contact');
Route::get('offer', 'AirportsfrontController@offer');
Route::get('/showairports/{id}', 'AirportsfrontController@showairports');
Route::get('/showcities/{id}', 'AirportsfrontController@showcities');
Route::get('/showcountry/{id}', 'AirportsfrontController@showcountries');
Route::get('/showairports/{id}', 'AirportsfrontController@airports');
Route::get('/showairport/{id}', 'AirportsfrontController@airport');
Route::get('/logout', 'AirportsController@getLogout');
Route::get('/continentsfront', 'AirportsfrontController@showcontinents');
Route::get('/showcontinent/{id}', 'AirportsfrontController@continent');

Route::post('/showairport/{id}', [
    'uses'      => 'AirportsfrontController@store',
    'as'        => 'showairport',
]);

Route::get('/airportsbycontinent/{id}', [
    'uses'      => 'AirportsfrontController@airportsbycontinent',
    'as'        => 'airportsbycontinent',
]);

Route::get('/airportsbycountry/{id}', [
    'uses'      => 'AirportsfrontController@airportsbycountry',
    'as'        => 'airportsbycountry',
]);

Route::get('/airportsbycity/{id}', [
    'uses'      => 'AirportsfrontController@airportsbycity',
    'as'        => 'airportsbycity',
]);

Route::get('/', [
    'uses'      => 'AirportsfrontController@start',
    'as'        => 'start',
]);




Auth::routes();

Route::get('/home', 'HomeController@index');
