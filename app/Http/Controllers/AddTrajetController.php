<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;
use App\Type_Vehicule;
use App\Vehicule;
use App\Trajet;
use App\Tve;

class AddTrajetController extends Controller
{

    public function addNewTrajet(Request $request) {

    //vérification les paramétres entrés par le client
    if($request->isMethod('POST')) {
        
        $this->validate($request,['start'=> 'required','waypoints'=> 'required','end'=> 'required', ]);

        $trajet=new Trajet();
        $tve=new Tve();
        $veh = Vehicule::find($request['vehicule']);
        $tveh = Type_Vehicule::find($veh->id_type);
        
        $trajet->id_c=1;

        $var=$request['distance'];
        $res=substr($var,9);
        $dist=explode(" ",$res);
        $distance=0;
        for($i=0;$i<count($dist);$i=$i+2)
        {
            $distance+=intval($dist[$i]);
            echo $dist[$i]."<br>";
        }

        $trajet->date_dep=$request['date_dep'];
        $trajet->date_arr=$request['date_arr'];
        $trajet->heure_dep=$request['heure_dep'];
        $trajet->heure_arr=$request['heure_arr'];
        $trajet->matricule=$request['vehicule'];
        $trajet->description=$request['description'];
        // $trajet->prix=$request['prix'];
        $trajet->villeDep=$request['start'];
        $trajet->villeArr=$request['end'];
        $trajet->adresse_dep=$request['adresse_dep'];
        $trajet->adresse_arr=$request['adresse_arr'];
        $trajet->distance=$distance;

        $trajet->poid_rest=intval($tveh->poid_max)-intval($request['poids_occupe'])/1000;
        $trajet->vol_rest=intval($tveh->vol_max)-intval($request['vol_occupe'])/1000;
        $trajet->save();


        // echo $trajet->id;
        $tv= $request['waypoints'];
        foreach ($tv as $key => $value) {
            // echo 'ord: '($key+1).' waypoint: '.$value.'<br>';
            $data[]=[
                'id_trajet' =>$trajet->id,
                'villeE' =>$value,
            ];
            // $tve->id_trajet=$trajet->id;
            // $tve->villeE=$value;
            // $tve->ord=($key+1);
            // $tve->save();
        }
        Tve::insert($data);
                
        // echo "<br> distance total=".$distance;
        // return redirect("home");
    }

    if($request->isMethod('get')){

        return view("home");
        }
    }

}