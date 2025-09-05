<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/posts', [PostApiController::class, 'index']);
    Route::post('/posts', [PostApiController::class, 'store']);
    Route::get('/posts/{post}', [PostApiController::class, 'show']);
    Route::put('/posts/{post}', [PostApiController::class, 'update']);
    Route::delete('/posts/{post}', [PostApiController::class, 'destroy']);
});