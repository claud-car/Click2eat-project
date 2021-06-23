<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;  

Route::patch('/dashboard/restaurants/{restaurant:slug}/edit', [RestaurantController::class, 'update'])
                ->middleware('auth')
                ->name('restaurant.update');

Route::get('/dashboard/restaurants/create', [RestaurantController::class, 'create'])
                ->middleware('auth')
                ->name('restaurant.create');

Route::post('/dashboard/restaurants/create', [RestaurantController::class, 'store'])
                ->middleware('auth');

Route::get('/dashboard/restaurants/{restaurant:slug}/edit', [RestaurantController::class, 'edit'])
                ->middleware('auth')
                ->name('restaurant.edit');

Route::delete('/dashboard/restaurants/{restaurant:slug}/delete', [RestaurantController::class, 'destroy'])
                ->middleware('auth')
                ->name('restaurant.destroy');




