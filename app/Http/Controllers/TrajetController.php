<?php

namespace App\Http\Controllers;

use App\Trajet;

use App\Client;

use App\Conducteur;

use App\Vehicule;

use App\Tve;

use DB;

use Illuminate\Http\Request;

class TrajetController extends Controller
{
    
    public function afficher($id){

    	$trajet=Trajet::find($id);
    	if(empty($trajet)==false)
    	{
    		$client=Client::find($trajet->id_c);
    		$cond=Conducteur::find($trajet->id_c);
    		$count= Trajet::withTrashed()->where('id_c',$trajet->id_c)->get()->count();
    		$veh=Vehicule::find($trajet->matricule);
    		$tve=Tve::where('id_trajet',$trajet->id)->get();
    		$arr=Array('trajet'=>$trajet,'client'=>$client,'cond'=>$cond,'count'=>$count,'veh'=>$veh,'tve'=>$tve);
    		return view('reservation',$arr);
    	}
    	else
    	{
    		return view('404');
    	}
    }
}
