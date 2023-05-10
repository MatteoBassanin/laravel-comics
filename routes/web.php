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




    // $data = [
    //     $linkArrayTop =  [
    //         [

    //             "name" => "CHARACTERS",
    //         ],

    //         [
    //             "name" => "COMICS",

    //         ],
    //         [
    //             "name" => "MOVIES",

    //         ],
    //         [
    //             "name" => "TV",

    //         ],
    //         [
    //             "name" => "GAMES",

    //         ],
    //         [
    //             "name" => "COLLECTIBLES",

    //         ],
    //         [
    //             "name" => "FANS",

    //         ],
    //         [
    //             "name" => "NEWS",

    //         ],
    //         [
    //             "name" => "SHOP",

    //         ]


    //     ],
    // ];






    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');
