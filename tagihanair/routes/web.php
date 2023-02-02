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
    return view('landingpage.home');
});
Route::get('/tagihan', function () {
    return view('landingpage.tagihan');
});
Route::get('/form_bayar', function () {
    return view('landingpage.form_bayar');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/table', function () {
    return view('admin.table');
});

