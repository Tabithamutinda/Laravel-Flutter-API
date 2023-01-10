<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// // Getting all categories
// Route::get('categories', [\App\Http\Controllers\Api\CategoryController::class,'index']);

// // Getting category by id
// Route::get('categories{category}', [\App\Http\Controllers\Api\CategoryController::class,'show']);

//Using Resource for all
Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);

