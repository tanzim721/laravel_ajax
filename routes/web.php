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

Route::get('/', function () {
    dd(app());
    return view('welcome');
});


Route::get('/test', function(){
    app()->make('first_service_helper');
});

Route::get('/test-one', function(){
    app()->make('second_service_helper');
});