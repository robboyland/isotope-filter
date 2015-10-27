<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'release_date', 'notes'];

    public function genres() {
        return $this->belongsToMany('App\Genre');
    }
}