<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('etusivu');
});
Route::get('/lisaa', function () {
    return view('lisaa');
});
Route::post('/lisaa', function () {
    $nimi = request('name');

    return 'Lomake lähetettiin. Kirjoitit nimeksi: ' . $nimi;
});