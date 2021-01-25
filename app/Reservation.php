<?php

namespace App;

use App\Vehicule;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\softDeletes;

class Reservation extends Model
{
   public $timestamps= false ;

   protected $primaryKey = 'id';

      use softDeletes;

   protected $dates=['deleted_at'];

   public function trajet(){

   return $this->hasOne('App\Trajet','id');
  
}

}
