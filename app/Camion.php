<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    public function voyages(){
        return $this->hasMany('App\Voyage');
    }
    public function pannes(){
        return $this->hasMany('App\Panne');
    }
}
