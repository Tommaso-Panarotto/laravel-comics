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
    $headerLinks= [
        "Characters",
        "Comics",
        "Movies",
        "Tv",
        "Games",
        "Collectible",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ];
    $comics = config("db.comics");
    return view('pages.home', compact("comics","headerLinks"));
});