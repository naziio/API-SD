<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\ItemPropertiesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('item-properties' , [ItemPropertiesController::class, 'store']);
    Route::put('item-properties/{itemProperties}', [ItemPropertiesController::class, 'update']);
    Route::delete('item/{itemProperties}', [ItemPropertiesController::class, 'destroy']);
    
});


Route::apiResource('items', ItemController::class)->middleware('auth:sanctum');




