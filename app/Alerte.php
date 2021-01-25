<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\softDeletes;

class Alerte extends Model
{
    public $timestamps= false ;

    use softDeletes;

   protected $dates=['deleted_at'];
}
