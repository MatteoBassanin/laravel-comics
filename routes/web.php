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




    $comics = config('comics');
    $linkArrayTop = config('linkArrayTop');
    return view('home', compact('comics'));
    return view('home', compact('linkArrayTop'));
})->name('home');
