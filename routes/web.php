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

    $data = [
        'dati' => [
            'pippo',
            'pluto',
            'paperino',
            'minnie',
            'clarabella'
        ]
    ];

    return view('home', $data);
});

Route::get('/marvel', function () {

    $data = [
        'dati' => [
            'batman',
            'robin',
            'joker',
            'pinguino',
            'gesucristo'
        ]
    ];

    return view('marvel', $data);
});
