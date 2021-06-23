<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;  

Route::get('/dashboard/types/index', [TypeController::class, 'index'])
                ->middleware('auth')
                ->name('type.index');

Route::patch('/dashboard/types/{type:slug}/edit', [TypeController::class, 'update'])
                ->middleware('auth')
                ->name('type.update');

Route::get('/dashboard/types/create', [TypeController::class, 'create'])
                ->middleware('auth')
                ->name('type.create');

Route::post('/dashboard/types/create', [TypeController::class, 'store'])
                ->middleware('auth')
                ->name('type.store');

Route::get('/dashboard/types/{type:slug}/edit', [TypeController::class, 'edit'])
                ->middleware('auth')
                ->name('type.edit');

Route::delete('/dashboard/types/{type:slug}/delete', [TypeController::class, 'destroy'])
                ->middleware('auth')
                ->name('type.destroy');