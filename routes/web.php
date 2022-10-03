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
