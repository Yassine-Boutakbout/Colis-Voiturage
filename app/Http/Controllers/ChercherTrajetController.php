<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;
use App\Type_Vehicule;
use App\Vehicule;
use App\Trajet;
use App\Conducteur;
use App\Client;


class ChercherTrajetController extends Controller
{
    public function chercher(Request $request){

    	$trajet=new Trajet();
    	// $trajet=Trajet::where('id',$request->input('villeDep'))->get();
    	$trajet=Trajet::where('villeDep','like',$request['villeDep'])->where('villeArr','like',$request['villeArr'])->where('date_dep','=',$request['date'])->get();
    	// $conducteur=Conducteur::find($trajet->id_c)->rating;
    	// $client=Client::find($trajet->id_c);
    	$arr=Array('trajet'=>$trajet);
    	return view('recherche',$arr);
    }

    
}