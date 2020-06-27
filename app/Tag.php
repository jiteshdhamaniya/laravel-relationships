<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    // public function dumb()
    // {
    //     return $this->morphToMany('App\Tag', 'taggable');
    // }


    /**
     * Get all of the posts that are assigned this tag.
     */
    public function users()
    {
        return $this->morphedByMany('App\Post', 'taggable');
    }

}
