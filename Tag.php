<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public function solutions()
{
    return $this->belongsToMany(\App\Models\Solution::class);
}
}
