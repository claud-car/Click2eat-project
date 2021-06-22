<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;  

Route::get('/dashboard/restaurants/create', [RestaurantController::class, 'create'])
                ->middleware('auth')
                ->name('restaurant.create');

Route::post('/dashboard/restaurants/create', [RestaurantController::class, 'store'])
                ->middleware('auth');

Route::get('/dashboard/restaurants/edit', [RestaurantController::class, 'edit'])
                ->middleware('auth')
                ->name('restaurant.edit');

Route::put('/dashboard', [RestaurantController::class, 'update'])
                ->middleware('auth');



