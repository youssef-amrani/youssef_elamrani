<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    public function Categorie(){
        return $this->belongsTo("App\Categorie");
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

}
