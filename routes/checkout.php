<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('cart/checkout', [CheckoutController::class, 'show'])                
                ->name('cart.checkout');

