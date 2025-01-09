<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'Example API',
        'version' => '1.0.0 25.1.9.1'
    ]);
});

Route::middleware('guest')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/', [AuthController::class, 'index']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });

    Route::apiResource('articles', ArticleController::class);
});
