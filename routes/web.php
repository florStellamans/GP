<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GpController;   

Route::get('/home', [GpController::class, 'displayHome']);

Route::get('/input', [GpController::class, 'displayInput']);

Route::post('/input', [GpController::class, 'processInput']);

Route::get('/input/remove', [GpController::class, 'removeAfwezigheden']);