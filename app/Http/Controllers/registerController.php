<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Client;
use App\Expediteur;
use App\Conducteur;
use App\Vehicule;
use App\Type_vehicule;
class registerController extends Controller

{

	
      public function addNewClient(Request $request) {

 //vérification les paramétres entrés par le client

        if($request['radio']=='expediteur'){

                    $this->validate($request,[

    'nomE'=> 'required|max:20|min:3',

    'prenomE'=> 'required|max:20|min:3',

    'emailE'=> 'required|email',

    'telephoneE'=> 'required|max:10|min:10',

    'confirmpassE'=>'required|min:6|same:passE' 

    ]);

        $newClient=new Client();

        $newClient->Nom=$request->input('nomE') ;

        $newClient->Prenom=$request->input('prenomE') ;

        $newClient->Email=$request->input('emailE') ;

        $newClient->Telephone=$request->input('telephoneE') ;

        $newClient->CarteBancaire=$request->input('cartebancaireE');

        $newClient->password=$request->input('passE');

        $newClient->save();

            $newExpediteur=new Expediteur();

            $newExpediteur->id_e=$newClient->id;

            $newExpediteur->save();

        }
        elseif ($request['radio']=='conducteur') {

                    $this->validate($request,[

    'nomC'=> 'required|max:20|min:3',

    'prenomC'=> 'required|max:20|min:3',

    'emailC'=> 'required|email',

    'telephoneC'=> 'required|max:10|min:10',

    'confirmpassC'=>'required|min:6|same:passC' 

    ]);

        $newClient=new Client();

        $newClient->Nom=$request->input('nomC') ;

        $newClient->Prenom=$request->input('prenomC') ;

        $newClient->Email=$request->input('emailC') ;

        $newClient->Telephone=$request->input('telephoneC') ;

        $newClient->CarteBancaire=$request->input('cartebancaireC');

        $newClient->password=$request->input('passC');

        $newClient->save();

            $newVehicule=new Vehicule();

            $newVehicule->matricule =$request->input('matricule');

            

             $newVehicule->image=$request->file('image')->store('public/VehiculesImages');

            if($request['type_vehicule']==1)

                 $typeNewVehicule=Type_vehicule::where('id_type',$request['type_vehicule'])->first()->get();

            if($request['type_vehicule']==2)

                 $typeNewVehicule=Type_vehicule::where('id_type',$request['type_vehicule'])->first()->get();

            if($request['type_vehicule']==3)

                 $typeNewVehicule=Type_vehicule::where('id_type',$request['type_vehicule'])->first()->get();

            $newVehicule->id_type=$typeNewVehicule->first()->id_type;

            $newVehicule->poid_rest=$typeNewVehicule->first()->poid_max;

            $newVehicule->vol_rest=$typeNewVehicule->first()->vol_max;


            $newConduteur=new Conducteur();  

            $newConduteur->id_c=$newClient->id;

            $newConduteur->rating=0;

            $newConduteur->save();

            $newVehicule->id_c=$newClient->id;

            $newVehicule->save();

        }

        return redirect("register");
    }

  
public function register() {

 return view("register");

} }
