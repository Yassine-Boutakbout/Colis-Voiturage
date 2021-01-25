<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alerte;
use App\Ville;


class lancerAlertController extends Controller
{
   public function addNewAlert(Request $request) {

  if($request->isMethod('POST')) {
        
$this->validate($request,[

'villeDep'=> 'required|max:20',

'villeArr'=> 'required|max:20',

'dateDep'=> 'required|Date',

'heureDep'=> 'required',

'dateArr'=> 'required|Date',

'heureArr'=> 'required',

'contenu'=>'required|max:40',

'poid'=>'required|numeric',

'largeur'=>'required|numeric',

'langeur'=>'required|numeric',

'hauteur'=>'required|numeric'

]);

        $NewAlert=new Alerte();
        $NewAlert->villeDep=$request['villeDep'] ;
        $NewAlert->villeArr=$request['villeDep'] ;
        $NewAlert->date_dep=$request->input('dateDep') ;
        $NewAlert->date_arr=$request->input('dateArr') ;
        $NewAlert->heure_dep=$request->input('heureDep');
        $NewAlert->contenuColis=$request->input('contenu');
        $NewAlert->poids=floatval($request->input('poid'));
        $langeur=(float)$request->input('largeur');
        $largeur=(float)$request->input('longeur');
        $hauteur=(float)$request->input('hauteur'); 
        $volume=$langeur * $largeur * $hauteur ;
        $NewAlert->volume=$volume;
        $NewAlert->save();
        session()->flash('success','Félicitationl,l\'alerte a etait bien enregestrais !');
       
        return redirect("lanceralert");
    }

   if($request->isMethod('get')) { 
      $ville=Ville::All();
        $arr=Array('ville'=>$ville);
    return view("lancerAlert",$arr);

   } }
}

