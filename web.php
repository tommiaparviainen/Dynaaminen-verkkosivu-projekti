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
    $tags = \App\Models\Tag::all();

    return view('lisaa', [
        'areas' => $areas,
        'tags' => $tags
    ]);
});

Route::post('/lisaa', function () {
    $nimi = request('name');
    $kuvaus = request('description');
    $problemAreaId = request('problem_area_id');

    $solution = Solution::create([
    'name' => $nimi,
    'description' => $kuvaus,
    'problem_area_id' => $problemAreaId
]);

$tags = request('tags');

if ($tags) {
    $solution->tags()->attach($tags);
}

    return redirect('/');
});

Route::get('/testi', function () {
    ProblemArea::create([
        'name' => 'myynti'
    ]);

    return 'lisätty';
});
Route::get('/tagtest', function () {
    \App\Models\Tag::create(['name' => 'B2B']);
    \App\Models\Tag::create(['name' => 'B2C']);

    return 'tagit lisätty';
});

Route::get('/haku', function () {
    $areas = ProblemArea::all();
    $tags = \App\Models\Tag::all();

    $ratkaisut = collect();

    if (request('problem_area_id')) {
        $query = Solution::where('problem_area_id', request('problem_area_id'));

        if (request('tags')) {
            $query->whereHas('tags', function ($q) {
                $q->whereIn('tags.id', request('tags'));
            });
        }

        $ratkaisut = $query->get();
    }

    return view('haku', [
        'areas' => $areas,
        'tags' => $tags,
        'ratkaisut' => $ratkaisut
    ]);
});
Route::get('/kpi', function () {
    $solutions = Solution::all();
    return view('kpi', ['solutions' => $solutions]);
});

Route::post('/kpi', function () {
    \App\Models\Kpi::create([
        'name' => request('name'),
        'solution_id' => request('solution_id')
    ]);

    return redirect('/');
});
