<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// post login
Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

//register user
Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);

// post logout
Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//category
Route::post('category', [\App\Http\Controllers\Api\CategoryController::class, 'index'])->middleware('auth:sanctum');
// Route::apiResource('category', \App\Http\Controllers\Api\CategoryController::class)->middleware('auth:sanctum');

//product get
Route::get('product', [\App\Http\Controllers\Api\ProductController::class, 'index'])->middleware('auth:sanctum');
// // api resource product
// Route::apiResource('products', \App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

// // api resource order
// Route::apiResource('orders', \App\Http\Controllers\Api\OrderController::class)->middleware('auth:sanctum');
