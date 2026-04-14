<?php

use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redis', [RedisController::class, 'index']);
Route::post('/redis', [RedisController::class, 'store']);
Route::delete('/redis', [RedisController::class, 'clear']);