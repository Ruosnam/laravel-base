<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/return_word', function () {
    return '<h1 style="text-align:center;"> ECRIRE UN MOT ICI </h1>';
});

/*Route::get('/utilisateur', function () {
    return view('pages.utilisateur');
});*/

/*Route::get('/couriel', function () {
    return view('pages.couriel');
});*/

/*    return view('pages.timesht');
});

Route::get('/gdoc', function () {
    return view('pages.g_documentation');
});*/

//return word  

Route::get('/return_uname/{uname}', function ($uname) {
    return '<h1 style="text-align:center;">MY NAME IS :'.$uname.'</h1>';
});

Route::get('/return_uname_and_pwd/{uname}/{passw}', function ($uname,$passw) {
    return '<h1 style="text-align:center;">MY NAME IS :'.$uname.'<br> AND PASSWORD IS :'.$passw.'</h1>';
});

// affiche use controller 

Route::get('/pcontroller', 'page_controller@firstFunctionController');

// gerer les page par controller

//Route::get('/couriel', 'page_controller@page_couriel');
Route::get('/gdoc', 'page_controller@page_g_documentation');
//Route::get('/utilisateur', 'page_controller@page_utilisateur');
Route::get('/timesht', 'page_controller@page_timesht');

//pass variable from controller to view page
Route::get('/couriel', 'page_controller@page_couriel2');

//pass array from controler to view page

Route::get('/utilisateur', 'page_controller@page_utilisateur2');

//page eventpage
Route::resource('/events', 'EventController');

Route::get('/addeventurl', 'EventController@display');
Route::get('/editeventurl', 'EventController@show');