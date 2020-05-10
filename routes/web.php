<?php

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('fichehebergement','FicheHebergementController');
 
 
Route::get('sexes','Datacontroller@sexes');
Route::get('typedepieces','Datacontroller@typedepieces');
Route::get('motifs','Datacontroller@motifs');
Route::get('nationalites','Datacontroller@nationalites');
Route::get('etablissements','Datacontroller@etablissements');
Route::get('fichehebergements','Datacontroller@fichehebergements');
Route::get('fichenuitees','Datacontroller@ficheNuitees');
Route::get('fichenuiteesresto','Datacontroller@nuiteesrestorations');
Route::get('restorations','Datacontroller@restorations')->middleware('type:type-4');;
Route::get('type','Datacontroller@type')->middleware('type:type-5');



Route::get('test',function(Request $request ){
return $request;
});
Route::get('index',function(){

return view('index');
});

Route::get('demo',function(){

    return view('ace/test');
    });

Route::get('/acee',function(){
    return view('ace/tables')->with('fiches',Auth::user()->etablissements->ficheHebergements);
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
