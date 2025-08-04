<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showview']);
Route::post('/submit', [MainController::class, 'submitForm'])->name('submit');
