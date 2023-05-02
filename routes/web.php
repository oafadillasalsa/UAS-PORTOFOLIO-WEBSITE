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
    return view('welcome');
});

Route::post('/profile', function () {
    return view('profile');
});

Route::post('/portofolio', function () {
    return view('portofolio');
});

Route::post('/konntak', function () {
    return view('kontak');
});