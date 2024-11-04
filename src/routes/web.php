<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;



Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index']);
