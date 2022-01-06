<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StockController;

//Route::apiResource('stocks', StockController::class);
Route::get('/stocks', [StockController::class, 'index']);
Route::get('/stocks/{stock}', [StockController::class, 'show']);
