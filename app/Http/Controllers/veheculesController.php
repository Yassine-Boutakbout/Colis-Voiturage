<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Vehicule;

use App\Type_vehicule;

use App\Conducteur;



class veheculesController extends Controller
{
    public function addVehecule(Request $request){
    
      $newVehecule=new Vehicule();

      $newVehecule->matricule=$request->input('matricule');

      $newVehecule->id_type=$request['type_vehicule'];
      
      if($request->hasFile('image')) {

      $imagePath=$request->file('image')->store('VehiculesImages');  

      $newVehecule->image=$imagePath;

       }

      $newVehecule->id_c=Session::get('id_c');

      $newVehecule->save();

      return redirect()->back();
      
    } 

     public function deleteVehicule($matricule){

     $vehicule=Vehicule::find($matricule);

     $trajets=$vehicule->trajets;

     if(is_null( $trajets->first())) {

     $vehicule->delete(); 

     return redirect()->back();

}
     else { return redirect()->back()->withErrors('ATTENTION !! VOUS POUVEZ PAS SUPPRIMER CETTE VEHICULE CAR VOUS AVEZ DEJA PROPOSER UN TRAJER SUPORTE PAR ELLE '); }
}

   public function getVehicules($id_c) {
  
              $vehcules=Conducteur::find($id_c)->vehicules ;

              return view('vhecules',['infosV'=> $vehcules]);
}

}
