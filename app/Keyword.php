<?php

namespace App;

class Keyword extends Model
{

    public function pracownicy()
    {
        return $this->belongsToMany('App\Pracownicy');

    }

}
