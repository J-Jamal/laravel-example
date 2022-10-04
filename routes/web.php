<?php

use Illuminate\Http\Request;
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


// Routing untuk menu home
Route::get('home', function () {
    $name = "Laravel 8";
    return view('home.home', [
        'name' => $name,
    ]);
});

// untuk mengetahui link dari asset yang kita buat
// Route::get('/', fn () => dd(asset('css/app.css')));

// Routing untuk menu view contact
Route::view('contact', 'home.contact');

// Routing untuk menu view post
Route::view('post', 'home.post');

// Routing untuk halaman about
Route::view('about', 'home.about');

// Routing untuk halaman profile
Route::view('profile', 'home.profile');

// routing untuk melakukan request di halaman profile
Route::get('profile/{username}', function ($username) {
    return view('home.profile', ['name' => $username]);
});
