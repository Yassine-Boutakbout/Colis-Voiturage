<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class logoutController extends Controller
{
 public function destory(){ 

	Session::flush();

	return redirect('auth');
}
    
}
