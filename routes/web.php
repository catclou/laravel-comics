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

// Route pagina principale (comics)
Route::get('/', function () {
    return view('comics');
});

// Route pagina characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Route pagina movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Route pagina tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Route pagina games
Route::get('/games', function () {
    return view('games');
})->name('games');

// Route pagina collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Route pagina videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Route pagina fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Route pagina news
Route::get('/news', function () {
    return view('news');
})->name('news');

// Route pagina shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');