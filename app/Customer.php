<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $guarded = [];

    /**
     * This Customer Belong to one user.
     */
    public function User(){

        return $this->belongsTo('App\User');
    }


}
