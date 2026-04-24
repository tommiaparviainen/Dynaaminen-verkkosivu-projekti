<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['name', 'description', 'problem_area_id'];
    public function problemArea()
{
    return $this->belongsTo(\App\Models\ProblemArea::class);
}
public function tags()
{
    return $this->belongsToMany(\App\Models\Tag::class);
}
}
