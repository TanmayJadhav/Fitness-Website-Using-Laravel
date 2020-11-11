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
    return view('index');
});

Route::view("product_gym_equipments",'product_gym_equipments');
Route::view("product_nutrition",'product_nutrition');
Route::view("product_gym_accessories",'product_gym_accessories');
Route::view("product_gym_clothing",'product_gym_clothing');
