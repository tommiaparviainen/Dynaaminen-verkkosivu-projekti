<?php

use Illuminate\Support\Facades\Route;
use App\Models\Solution;
use App\Models\ProblemArea;

Route::get('/', function () {
    $ratkaisut = Solution::all();

    return view('etusivu', ['ratkaisut' => $ratkaisut]);
});

Route::get('/lisaa', function () {
    $areas = ProblemArea::all();

    return view('lisaa', ['areas' => $areas]);
});

Route::post('/lisaa', function () {
    $nimi = request('name');
    $kuvaus = request('description');

    Solution::create([
        'name' => $nimi,
        'description' => $kuvaus
    ]);

    return redirect('/');
});

Route::get('/testi', function () {
    ProblemArea::create([
        'name' => 'myynti'
    ]);

    return 'lisätty';
});
