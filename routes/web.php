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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages', 'PagesController');
Route::resource('categories', 'CategoriesController');
Route::resource('sites', 'SitesController');
Route::resource('cars', 'carsController');
Route::resource('panstwa', 'PanstwaController');
Route::resource('countrys', 'CountrysController');
Route::resource('cities', 'CitiesController');
Route::resource('airports', 'AirportsController');
Route::resource('airportsfront', 'AirportsfrontController');
Route::get('/contact', 'AirportsfrontController@contact');
Route::get('/offer', 'AirportsfrontController@offer');


Auth::routes();

Route::get('/home', 'HomeController@index');
