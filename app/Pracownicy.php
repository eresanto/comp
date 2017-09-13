<?php

namespace App;


class Pracownicy extends Model
{
    public function keywords()
    {
      return $this->belongsToMany('App\Keyword');
    }
}
