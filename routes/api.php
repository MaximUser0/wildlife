<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImgPlaceController;
use App\Http\Controllers\ImgTourController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TourController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::apiResource('/place', PlaceController::class);
Route::apiResource('/tour', TourController::class);
Route::apiResource('/request', RequestController::class);
Route::apiResource('/img_place', ImgPlaceController::class);
Route::apiResource('/img_tour', ImgTourController::class);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout']);
});


