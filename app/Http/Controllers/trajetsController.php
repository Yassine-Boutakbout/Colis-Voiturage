<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conducteur;

use App\Trajet;

use App\Reservation;

use App\Tve;

class trajetsController extends Controller
{
    public function getTrajets( $id_c ) {

    		$trajets=Conducteur::find($id_c)->trajets ;

            $vehicules=NULL;

            $villesEtapes=NULL;

            if(count($trajets)>0){

    		foreach($trajets as $t){
              
              $vehicules[]=$t->vehicule;

              $villesEtapes[]=Tve::where('id_trajet',$t->id)->get();

              }

                     
                       }

       		 return view('trajets',['infosT' => $trajets ,'infosV' => $vehicules ,'infoVE' => $villesEtapes ]); 

}

public function deleteTarjet(Request $request,$id_t) {

   $trajet=Trajet::find($id_t);
   
   $reservations=Reservation::where('id_t',$id_t)->get();
   
   if(!is_null($reservations)){
    
    $trajet->delete();

    return redirect()->back();

}

   else
    
     return redirect()->back()->withErrors(['ATTENTION !! LE TRAJET EST DEJA RESERVE TU PEUT PAS LE SUPPRIMER !']);
   

}

}
