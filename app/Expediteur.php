<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediteur extends Model
{
     public $timestamps= false ;
     protected $primaryKey = 'id_e';

     public function reservations()
    {
        return $this->hasMany('App\Reservation','id_e');
    }



}
