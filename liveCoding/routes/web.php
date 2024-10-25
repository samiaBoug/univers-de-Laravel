<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController ;

Route::get('/' , function(){
    return view('home') ;
}) ;

Route::get('/contact' , [ContactController::class ,'create']) ;


