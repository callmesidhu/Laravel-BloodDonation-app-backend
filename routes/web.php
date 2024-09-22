<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodController;

Route::get('/api/data', [BloodController::class, 'index']);

Route::get('/api/add', [BloodController::class, 'store']);