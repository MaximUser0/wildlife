<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImgPlaceController;
use App\Http\Controllers\ImgTourController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TourController;
use App\Models\Admin;
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
Route::post('/login', function (Request $request) {
        $user = Admin::get()
            ->where('name', "=", $request['name'])
            ->where('password', "=", $request['password'])
            ->first();
        if ($user != null) {
            session(['name' => 'name']);
            return redirect(url('admin/tour'))->with('name', 'Profile');
        } else {
            return back()->withInput();
        }
    }
);
