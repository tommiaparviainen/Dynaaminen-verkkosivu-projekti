<?php

use Illuminate\Support\Facades\Route;
use App\Models\Solution;

Route::get('/', function () {
    return view('etusivu');
});

Route::get('/lisaa', function () {
    return view('lisaa');
});

Route::post('/lisaa', function () {
    $nimi = request('name');
    $kuvaus = request('description');

    Solution::create([
        'name' => $nimi,
        'description' => $kuvaus
    ]);

    return 'Tallennettu tietokantaan!';
});
