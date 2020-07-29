<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public function camions(){
        return $this->belongsTo('App\Camion', 'camion_id');
    }
}
