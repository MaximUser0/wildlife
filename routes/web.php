<?php

use App\Models\ImgPlace;
use App\Models\ImgTour;
use App\Models\Place;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $places = Place::get();
    $tours = Tour::get();
    $img_array = ImgPlace::get()->pluck('url');
    return view('index', compact(["places", "tours", "img_array"]));
});
Route::get('/place/{place}', function ($id) {
    $array = Place::find($id);
    $img_array = ImgPlace::where('id_place', '=', $id)->pluck('url');
    $tours = Tour::where('id_place', '=', $id)->get()->toArray();
    return view('place', compact(["array", "img_array", "tours"]));
});
Route::get('/tour/{tour}', function ($id) {
    $array = Tour::find($id);
    $img_array = ImgTour::where('id_tour', '=', $id)->pluck('url');
    return view('tour', compact(["array", "img_array"]));
});
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/admin/tour', function () {
    return view('admin/admin_tour');
});
Route::get('/admin/place', function () {
    return view('admin/admin_place');
});
Route::get('/admin/request', function () {
    return view('admin/admin_request');
});
Route::get('/admin/add/place', function () {
    return view('admin/admin_add_place');
});
Route::get('/admin/add/tour', function () {
    return view('admin/admin_add_tour');
});
Route::get('/admin/update/place', function () {
    return view('admin/admin_update_place');
});
Route::get('/admin/update/tour', function () {
    return view('admin/admin_update_tour');
});