<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('products', App\Http\Controllers\api\v1\ProductController::class);
});

Route::group(['prefix' => 'v2'], function () {
    Route::apiResource('products', App\Http\Controllers\api\v2\ProductController::class);
});

