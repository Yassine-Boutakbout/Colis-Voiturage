<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Client;
use App\Conducteur;
use App\Expediteur;
use App\Vehicule;
use App\Trajet;
use Session;
use Redirect;
class authController extends Controller
{
    public function check(Request $request){

    	$client=Client::where('email',$request->input('email'))->where('password',$request->input('pass'))->get()->first();

                //verifecation du client

     	      if(!is_null($client)) { 

                    Session(['login' => 'logged' ] );

    		              $id=$client['id'] ;

    		                  Session(['infosP' => $client ] );

        	                   $conducteur=Conducteur::find($id);

                                //if l'authentification d'un conducteur

        		                if(!is_null($conducteur)){

                                     Session(['id_c' => $conducteur->id_c ] );

                                  //redirection vers la page current ou vers le profile par default
                                    if(!is_null(session()->get('intended'))){  

                                    $path=session()->get('intended');

                                    session()->forget('intended');

                                    return Redirect::to($path);   
                                                                    }

                                    else return redirect('profilecond')  ;
    
             					}


                        //if l'authentification d'un expediteur

         		else   {

        			         $id_e=Expediteur::find($id)->id_e;


                            Session(['id_e' => $id_e ] );

                    
        			         //return le client vers la page curante ou bien le profilr si il y a aucune  
                             if(!is_null(session()->get('intended'))){  

                                $path=session()->get('intended');

                                session()->forget('intended');

                                return Redirect::to($path);   
                                    }

                             else return redirect('profileexp')  ;
         			
             				} 

  							}

     	else{

    		session()->flash('message','your email or your password are wrong');

  	 		return redirect('auth'); 
  	}
}




}
	