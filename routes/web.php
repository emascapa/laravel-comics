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


Route::get('/characters', function () {
    return view('characters');
})->name('characters');


//COMICS PART

Route::get('/comics', function () {
    return view('comics.index');
})->name('comics');



Route::get("/comics/{id}", function ($id) {

    $comics = config('db.comics');

    if ($id >= 0 && is_numeric($id) && $id < count($comics)) {

        $comic = $comics[$id];

        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }

})->name('show-comics');



//END COMICS PART

Route::get('/movie', function () {
    return view('movie');
})->name('movie');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');
 
Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
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
