<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    AuthorController,
    GenreController,
    TransactionController
};

//  AUTH ROUTES
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('ping', fn() => response()->json(['pong' => true]));

//  PUBLIC
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);

//  ADMIN 
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('genres', GenreController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('transactions', TransactionController::class)->only(['index', 'destroy']);
});

//  CUSTOMER ROUTES (login + !admin)
Route::middleware(['auth:sanctum', 'customer'])->group(function () {
    Route::apiResource('transactions', TransactionController::class)->only(['store', 'update', 'show']);
});
