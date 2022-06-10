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
    $cards = config("db.cards");
    return view('home', compact('cards'));
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $cards = config("db.cards");
    return view('comics', compact('cards'));
})->name('comics');

// Modifico la rotta per mostrare i link delle singole card tramite un parametro id
Route::get('/comics/{id}', function ($id) {
    $cards = config("db.cards");
    if ($id >= 0 && is_numeric($id) && $id < count($cards)) {
        $card = $cards[$id];
        dd($card);
        return view('comics.show', compact('card'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collecibles', function () {
    return view('collecibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

