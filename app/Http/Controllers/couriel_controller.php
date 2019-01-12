<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class couriel_controller extends Controller
{
    //

    
    public function page_couriel(){
    	
    	return view('pages.couriel');
    }
    

    public function firstFunctionController(){
    	return '<h1 style="text-align:center;">USE FIRST CONTROLLER </h1>';
    }
}
