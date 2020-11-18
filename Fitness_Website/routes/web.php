<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BlogController;

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
Route::get('/logout', [UserAuthenticateController::class,'logout']);
Route::post('/resetpassword', [UserAuthenticateController::class,'resetpassword']);

Route::get('product_nutrition',[ProductController::class,'get_product_nutrition']);
Route::get('product_gym_equipments',[ProductController::class,'get_product_gym_equipments']);
Route::get('product_gym_accessories',[ProductController::class,'get_product_gym_accessories']);
Route::get('product_gym_clothing',[ProductController::class,'get_product_gym_clothing']);


Route::post('/payment_status', [OrderController::class,'paymentCallback'])->name('status');
Route::get('/payment/{id}', [OrderController::class,'order'])->middleware('auth');
Route::view('/payment_status','payment_status');

Route::get('product_description/{id}',[ProductController::class,'get_product_description']);


Route::get('nutrition_blog',[BlogController::class,'get_nutrition_blog']);
Route::get('weight_loss_blog',[BlogController::class,'get_weight_loss_blog']);
Route::get('fitness_blog',[BlogController::class,'get_fitness_blog']);