<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('cart/', [CartController::class, 'show'])
                ->middleware('guest')
                ->name('cart.show');

Route::get('cart/checkout', [CartController::class, 'checkout'])
                ->middleware('guest')
                ->name('cart.checkout');

