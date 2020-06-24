<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // enable mass filling
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Image() {

        return $this->morphOne('App\Image', 'imageable');

    }


}
