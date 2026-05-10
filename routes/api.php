<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunFactController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\FoodController;

Route::get('/fun-facts/{country}', [FunFactController::class, 'index']);
Route::post('/fun-facts', [FunFactController::class, 'store']);
Route::delete('/fun-facts/{id}', [FunFactController::class, 'destroy']);

Route::get('/attractions/{country}', [AttractionController::class, 'index']);
Route::post('/attractions', [AttractionController::class, 'store']);
Route::delete('/attractions/{id}', [AttractionController::class, 'destroy']);

Route::get('/foods/{country}', [FoodController::class, 'index']);
Route::post('/foods', [FoodController::class, 'store']);
Route::delete('/foods/{id}', [FoodController::class, 'destroy']);