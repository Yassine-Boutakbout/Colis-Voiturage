<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
     public $timestamps= false ;

     protected $primaryKey = 'id_c';

    public function vehicules()
    {
        return $this->hasMany('App\Vehicule','id_c');
    }

    public function trajets()
    {
        return $this->hasMany('App\Trajet','id_c');
    }
}
