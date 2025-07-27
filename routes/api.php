<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\LaptopController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/update-password', [UserController::class, 'updatePassword']);
    Route::put('/update-profile', [UserController::class, 'updateProfile']);

    // 💻 API Laptop
    Route::get('/laptops',           [LaptopController::class, 'index']);
    Route::post('/laptops',          [LaptopController::class, 'store']);
    Route::get('/laptops/{id}',      [LaptopController::class, 'show']);
    Route::put('/laptops/{id}',      [LaptopController::class, 'update']);
    Route::delete('/laptops/{id}',   [LaptopController::class, 'destroy']);

    // 👤 API Users (list semua user)
    Route::get('/users', [UserController::class, 'index']);

    Route::get('/user', function (Request $request) {
        return response()->json(['user' => $request->user()]);
    });
});

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello World']);
});
