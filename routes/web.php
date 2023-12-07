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
    $title = "Home";
    $message = "Hello, you are in $title now";
    return view('home', compact("title", "message"));
});

Route::get('/login', function () {
    $title = "Login";
    $message = "Hello, you are in $title now";
    return view('login', compact("title", "message"));
});

Route::get('/support', function () {
    $title = "Support";
    $message = "Hello, you are in $title now";
    return view('support', compact("title", "message"));
});
