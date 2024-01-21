<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChanelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/chanel', [ChanelController::class, 'index'])->name('chanel.index');
Route::get('/chanel/{id}', [ChanelController::class, 'show'])->name('chanel.show');

