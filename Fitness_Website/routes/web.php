<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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



Route::post('register',[UserAuthenticateController::class,'post_register']);
Route::post('login',[UserAuthenticateController::class,'post_login']);

Route::get('product_nutrition',[ProductController::class,'get_product_nutrition']);
Route::get('product_gym_equipments',[ProductController::class,'get_product_gym_equipments']);
Route::get('product_gym_accessories',[ProductController::class,'get_product_gym_accessories']);
Route::get('product_gym_clothing',[ProductController::class,'get_product_gym_clothing']);


Route::post('/payment/status', [OrderController::class,'paymentCallback'])->name('status');
Route::get('/payment', [OrderController::class,'order']);


