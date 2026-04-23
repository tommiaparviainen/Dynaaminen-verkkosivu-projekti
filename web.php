<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('etusivu');
});

Route::get('/lisaa', function () {
    return view('lisaa');
});

Route::post('/lisaa', function () {
    $nimi = request('name');
    $kuvaus = request('description');

    $rivi = "Nimi: $nimi | Kuvaus: $kuvaus" . PHP_EOL;

    File::append(storage_path('app/ratkaisut.txt'), $rivi);

    return 'Tallennettu tiedostoon';
});
