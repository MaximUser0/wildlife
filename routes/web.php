<?php

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
    return view('index');
});
Route::get('/place', function () {
    return view('place');
});
Route::get('/tour', function () {
    return view('tour');
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