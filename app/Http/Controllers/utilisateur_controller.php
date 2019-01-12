<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilisateur_controller extends Controller
{
    //
    public function page_utilisateur(){
    	
    	return view('pages.utilisateur');
    }
}
