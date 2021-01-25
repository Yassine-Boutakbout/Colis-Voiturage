<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Expediteur;

use App\Reservation;

class reservationsController extends Controller

{

    public function getReservations(Request $request,$id_e) {

      $reservations=Expediteur::find($id_e)->reservations;
      
      $trajets=null;

      $vehicules=null;

      foreach($reservations as $reservation){

      	$trajet=$reservation->trajet;

      	$trajets[]=$trajet;

        $vehicules[]=$trajet->vehicule;

      }

      return view('reservations',['infosR' => $reservations ,'infosT' => $trajets , 'infosV' => $vehicules]);  

	}

	public function deleteReservation($id_r)  {

      $reservation=Reservation::find($id_r);

      $reservation->delete();

      return redirect()->back();

   
}

}
