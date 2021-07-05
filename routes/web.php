<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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
    return view('welcome');
})->name('home');

Route::get('/dashboard', [OrderController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/dashboard/orders/{order:id}', [OrderController::class, 'show'])
    ->name('dashboard.restaurants.order.show');

Route::delete('/dashboard/orders/{order:id}/delete', [OrderController::class, 'destroy'])
    ->name('dashboard.order.cancel');

Route::get('/restaurants/{restaurant:slug}', [RestaurantController::class, 'show'])
    ->name('restaurant.show');

require __DIR__.'/auth.php';
require __DIR__.'/restaurants.php';
require __DIR__.'/plates.php';
require __DIR__.'/cart.php';
require __DIR__.'/aboutUs.php';
