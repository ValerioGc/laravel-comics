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
    $navLinks = config('navLinks');
    $footLinks = config('footLinks');
    $comicsArr = config('comics');
    return view('comicsSection', ['links' => $navLinks], ['comicsList' => $comicsArr], ['footLinks' => $footLinks]);

})->name('home');

