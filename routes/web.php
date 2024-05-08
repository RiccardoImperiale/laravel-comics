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
    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');

    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    abort_unless($id >= 0 && $id < count(config('comics')), 404);

    $comic = config('comics')[$id];

    return view('comics.show', compact('comic'));
})->name('comics.show');
