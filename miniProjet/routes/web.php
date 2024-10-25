<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ContactController;



Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

