<?php

use Illuminate\Http\Request;

Route::get('/listCars', 'CarsController@index');
Route::get('/listCars/{id}', 'CarsController@show');
Route::post('/createCar', 'CarsController@store');

