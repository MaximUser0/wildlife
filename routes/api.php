<?php

use App\Http\Controllers\ImgPlaceController;
use App\Http\Controllers\ImgTourController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TourController;
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

Route::apiResource('/place', PlaceController::class);
Route::apiResource('/tour', TourController::class);
Route::apiResource('/request', RequestController::class);
Route::apiResource('/img_place', ImgPlaceController::class);
Route::apiResource('/img_tour', ImgTourController::class);

