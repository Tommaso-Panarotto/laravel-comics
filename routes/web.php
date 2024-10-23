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
    $dcComics= [
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News"
    ];
    $shops= [
        "Shop DC",
        "Shop DC Collectibles"
    ];
    $dc= [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choices",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshop",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contacts Us"
    ];
    $sites= [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa"
    ];
    $icons= [
        [ "name"=> "digital comics", "imageUrl"=> "buy-comics-digital-comics.png" ],
        [ "name"=> "dc merchandise", "imageUrl"=> "buy-comics-merchandise.png" ],
        [ "name"=> "subscription", "imageUrl"=> "buy-comics-subscriptions.png" ],
        [ "name"=> "comic shop locator", "imageUrl"=> "buy-comics-shop-locator.png" ],
        [ "name"=> "dc power visa", "imageUrl"=> "buy-dc-power-visa.svg" ]
    ];
    $comics = config("db.comics");
    return view('pages.home', compact("icons","dc","sites","shops", "comics","headerLinks","dcComics"));
})->name("home");

Route::get('/comics/{index}', function (string $index) {
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
    $dcComics= [
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News"
    ];
    $shops= [
        "Shop DC",
        "Shop DC Collectibles"
    ];
    $dc= [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choices",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshop",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contacts Us"
    ];
    $sites= [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa"
    ];
    $icons= [
        [ "name"=> "digital comics", "imageUrl"=> "buy-comics-digital-comics.png" ],
        [ "name"=> "dc merchandise", "imageUrl"=> "buy-comics-merchandise.png" ],
        [ "name"=> "subscription", "imageUrl"=> "buy-comics-subscriptions.png" ],
        [ "name"=> "comic shop locator", "imageUrl"=> "buy-comics-shop-locator.png" ],
        [ "name"=> "dc power visa", "imageUrl"=> "buy-dc-power-visa.svg" ]
    ];
    $comics = config("db.comics");
    if (isset($comics[$index])){
    $comic = $comics[$index];
    return view('comics.show', compact("comic","icons","dc","sites","shops", "comics","headerLinks","dcComics"));
    } else {
        abort(404);
    };
})->name("home");