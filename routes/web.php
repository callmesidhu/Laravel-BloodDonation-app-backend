<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodController;

Route::get('/data', [BloodController::class, 'index']);

Route::get('/add', [BloodController::class, 'store']);