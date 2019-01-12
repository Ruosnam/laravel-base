<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    //

    public function index(){
    	$email='mansourre3@gmail.com';
    	return view('pages.couriel')->with('email',$email);
    }

}
