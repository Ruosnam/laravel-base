<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    //
    public function firstFunctionController(){
    	return '<h1 style="text-align:center;">USE FIRST CONTROLLER </h1>';
    }

    public function page_couriel(){
    	
    	return view('pages.couriel');
    }

    public function page_g_documentation(){
    	
    	return view('pages.g_documentation');
    }

    public function page_timesht(){
    	
    	return view('pages.timesht');
    }

    public function page_utilisateur(){
    	
    	return view('pages.utilisateur');
    }

//pass variable from controller to view page
    public function page_couriel2(){
    	$email='mansourre3@gmail.com';
    	return view('pages.couriel')->with('email',$email);
    }

    //pass array from controler to view page

    public function page_utilisateur2(){
    	$nom_user= array('nom'=>'mehidi','prenom'=>'mansour');
    	return view('pages.utilisateur')->with('nom_user',$nom_user);
    }


}
