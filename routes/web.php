<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('view');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/abdul', function () {
    return view('abdul');
});
