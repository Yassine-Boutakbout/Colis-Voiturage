<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Message;
use Illuminate\Support\Facades\Redirect;


class MessageController extends Controller
{
    public function client(){
    	// $ville= new Ville();
    	$client=Client::where('id','<>',1)->get();
    	$message=Message::Where('id_rec',1)->get();
    	$arr=Array('client'=>$client,'message'=> $message);
    	return view('receptionMessages',$arr);
    }

    public function msg($id){
        $msg = Message::find($id);
        return view('msg',compact('msg'));
    }

    public function send(Request $request){

        $this->validate($request,['dest'=> 'required|email','objet'=> 'required|max:100|min:3','message'=> 'required|max:1000']);

        $message=new Message();
        $test=Client::where('email',$request['dest'])->get()->first();
        // echo $request['dest'];
        
        if(empty($test)==false)
        {
            $message->id_env=1;
            $message->id_rec=$test->id;
            $message->objet=$request['objet'];
            $message->contenu=$request['message'];
            $message->save();
        }
        else
        {
            // return Redirect::to('/message')->withErrors($errors);
            return Redirect::back()->withErrors(['dest'=> "Email n'exist pas dans la bd"]);
            //return view('receptionMessages')->withErrors(['dest', 'The dest field is required.']);
        }
    }
}
