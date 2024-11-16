<?php

//API routes for motivational quotes

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;

Route::get('/motivation', [MotivationController::class, 'index']);
Route::get('/motivation/{id}', [MotivationController::class, 'show']);
Route::post('/motivation', [MotivationController::class, 'store']);
Route::put('/motivation/{id}', [MotivationController::class, 'update']);
Route::delete('/motivation/{id}', [MotivationController::class, 'destroy']);
Route::get('/motivation/random', [MotivationController::class, 'random']);
Route::get('/motivation/search/{keyword}', [MotivationController::class, 'search']);
Route::middleware('api')->get('/test', function () {
    return 'API works!';
});
