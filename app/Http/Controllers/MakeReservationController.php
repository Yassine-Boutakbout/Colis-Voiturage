<?php

namespace App\Http\Controllers;

use App\Trajet;

use App\Reservation;

use App\Compte;

use App\Operation;

use Illuminate\Http\Request;

class MakeReservationController extends Controller
{
    public function reserver(Request $request,$id){

    	// $trajet=new Trajet();
    	$trajet=Trajet::find($id);
    	if(empty($trajet)==false)
    	{
    		$compte=Compte::find($id);
    		$volume=($request['largeur']*$request['longueur']*$request['hauteur'])/1000000;
    		$poids=$request['poids']/1000;
    		if($volume<$trajet->vol_rest && $poids<$trajet->poid_rest)
    		{
    			
    		}



    		// if($compte->solde>)
    	}

    }
}
