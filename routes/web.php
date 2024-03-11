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
    return view('home',[
        "name" => "Muhammad Faris",
        "email" => "farissenior24@gmail.com",
        "page" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "name" => "Muhammad Faris",
        "email" => "Tomyamkicap@gmail.com",
        "images" => "images/logo.png",
        "page" => "About"
    ]);
});

Route::get('/posts', function () {
    return view('posts',[
        "page" => "Posts"
    ]) ;
});