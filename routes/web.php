<?php

use App\Http\Controllers\AdminController;
use App\Models\Admin;
use App\Models\ImgPlace;
use App\Models\ImgTour;
use App\Models\Place;
use App\Models\Request;
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
    echo session('name');
    return view('admin/login');
});
Route::get('/admin/tour', function () {
    if(session('name') != null){
        $tours = Tour::get();
        return view('admin/admin_tour', compact("tours"));
    } else {
        return view('admin/login');
    }
});
Route::get('/admin/place', function () {
    $places = Place::get();
    return view('admin/admin_place', compact("places"));
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
Route::get('/admin/update/place/{place}', function ($id) {
    $places = Place::find($id);
    $img_place = ImgPlace::where('id_place', '=', $id)->get()->toArray();
    return view('admin/admin_update_place', compact(["places", "img_place"]));
});
Route::get('/admin/update/tour/{tour}', function ($id) {
    $tours = Tour::find($id);
    $img_tour = ImgTour::where('id_tour', '=', $id)->get()->toArray();
    return view('admin/admin_update_tour', compact(["tours", "img_tour"]));
});
Route::get('/logout', function () {
    session(["name" => null]);
    return redirect(url('admin'));
});

Route::get('/login', [AdminController::class, 'index']);
