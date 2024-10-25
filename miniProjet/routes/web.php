<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;





Route::get('/about', [AboutController::class, 'about']);


