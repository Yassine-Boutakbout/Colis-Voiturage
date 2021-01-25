<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 use Illuminate\Database\Eloquent\softDeletes;

class Trajet extends Model
{

   protected $primaryKey = 'id';

   use softDeletes;

   protected $dates=['deleted_at'];

   public function vehicule(){
 
	return $this->belongsTo('App\Vehicule','matricule'); 

}
}
