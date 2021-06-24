<?php

use App\Http\Controllers\PlateController;
use Illuminate\Support\Facades\Plate;  

Route::get('dashboard/restaurants/plates/index', [PlateController::class, 'index'])
                ->middleware('auth')
                ->name('plate.index');

Route::patch('/dashboard/restaurants/{restaurant:slug}/plates/{plate:slug}/edit', [PlateController::class, 'update'])
                ->middleware('auth')
                ->name('plate.update');

Route::get('/dashboard/restaurants/{restaurant:slug}/plates/create', [PlateController::class, 'create'])
                ->middleware('auth')
                ->name('plate.create');

Route::post('/dashboard/restaurants/{restaurant:slug}/plates/create', [PlateController::class, 'store'])
                ->middleware('auth')
                ->name('plate.store');

Route::get('/dashboard/restaurants/{restaurant:slug}/plates/{plate:slug}/edit', [PlateController::class, 'edit'])
                ->middleware('auth')
                ->name('plate.edit');

Route::delete('/dashboard/restaurants/plates/{plate:slug}/delete', [PlateController::class, 'destroy'])
                ->middleware('auth')
                ->name('plate.destroy');