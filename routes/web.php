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
    return view('home');
});

Route::get('/signals', function () {
    return view('signals');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signal-historical', function () {
    return view('signal-historical');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('{coin}-fear-greed-index', function (string $coin) {
    return view('token-page', ['coin' => $coin]);
});
