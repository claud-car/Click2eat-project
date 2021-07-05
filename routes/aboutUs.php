<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;

Route::get('aboutUs/', [AboutUsController::class, 'show'])
                ->name('aboutUs.show');