<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    // relation ship between vote and asnwers
    public function answer()
    {
        return $this->belongsTo('\App\Answer');
    }

    //7.
    public function votes()
    {
        return $this->hasMany('\App\Vote');
    }

}
