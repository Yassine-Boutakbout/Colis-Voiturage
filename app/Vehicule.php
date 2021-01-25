<?php

namespace App;

use Illuminate\Database\Eloquent\softDeletes;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
	protected $primaryKey = 'matricule';
    public $timestamps= false ;
    public $incrementing=false ;
    use softDeletes;

   protected $dates=['deleted_at'];

   public function trajets(){

    return $this->hasMany('App\Trajet','matricule');
    }
}
