<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Ville;

use App\Vehicule;

use App\Type_Vehicule;

use App\Conducteur;

use App\Adresse;

class VilleController extends Controller
{
    //pour afficher la listes des villes existantes dans la base données 

    public function ViewVille(){
    	// $ville= new Ville();
    	$ville=Ville::All();
    	$arr=Array('ville'=>$ville);
    	return view('proposer',$arr);
    }

    public function VilleVehicule(){
    	// $ville= new Ville();
    	$ville=Ville::All();
    	$adresse=Adresse::All();
    	$veh=Conducteur::find(1)->vehicules;
    	$arr=Array('ville'=>$ville,'veh'=>$veh,'adresse'=>$adresse);
    	return view('proposer',$arr);
    }
}

?>