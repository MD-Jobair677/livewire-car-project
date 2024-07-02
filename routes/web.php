<?php

use App\Livewire\Edit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddCareController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/cars',[AddCareController::class,'addCare'])->name('add-car');
Route::get('/all/post',[AddCareController::class,'allCare'])->name('all-care');
Route::get('/edite-care/{id}',[AddCareController::class,'editCare'])->name('edit-care');