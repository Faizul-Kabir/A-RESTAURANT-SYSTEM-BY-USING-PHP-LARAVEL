<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/','App\Http\Controllers\RestaurantController@first');
Route::get('/mainpage', 'App\Http\Controllers\RestaurantController@index');
Route::get('/mainpage/orderdetails', 'App\Http\Controllers\RestaurantController@orderdetails');
Route::get('/mainpage/create','App\Http\Controllers\RestaurantController@create' );
Route::post('/mainpage','App\Http\Controllers\RestaurantController@fillup' );
Route::get('/mainpage/{id}','App\Http\Controllers\RestaurantController@show' );
Route::delete('/mainpage/{id}','App\Http\Controllers\RestaurantController@remove' );







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
