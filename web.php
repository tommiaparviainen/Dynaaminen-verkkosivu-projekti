<?php

use Illuminate\Support\Facades\Route;
use App\Models\Solution;

Route::get('/', function () {
    $ratkaisut = Solution::all();

    return view('etusivu', ['ratkaisut' => $ratkaisut]);
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
