<?php

namespace App;

class Keyword extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User');

    }
}
