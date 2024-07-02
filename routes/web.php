<?php

use App\Http\Controllers\AddCareController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/cars',[AddCareController::class,'addCare'])->name('add-car');
