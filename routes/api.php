<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/types', [TypeController::class, 'getAll']);
Route::get('/restaurants', [RestaurantController::class, 'getAll']);

Route::get('/generate-token', [OrderController::class, 'generateToken']);
Route::post('/payment', [OrderController::class, 'payment']);

Route::get('/last-orders', [OrderController::class, 'getLastOrders']);
