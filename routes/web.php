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

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/cfgi/livewire/livewire.js', $handle);
});

Route::get('/', function () {
    return view('home');
});

Route::get('{coin}-fear-greed-index', function (string $coin) {
    return view('token-page', ['coin' => $coin]);
});
