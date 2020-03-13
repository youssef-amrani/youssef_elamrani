<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
      public function Course(){
        return $this->hasMany("App\Course");
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
