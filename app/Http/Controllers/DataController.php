<?php

namespace App\Http\Controllers;

use App\Models\Models\Etablissement;
use App\Models\Models\FicheNuitee;
use App\Models\Models\FicheNuiteeRestauration;
use App\Models\Models\Sexe;
use App\Motif;
use App\Nationalite;
use App\Taxe;
use App\TypePiece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class DataController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function etablissements(){
          return Auth::user()->etablissements;
     }

     public  function sexes()
     {
          return Sexe::all();
     }


     public  function motifs()
     {
          return Motif::all();
     }
     public function typedepieces(){
         return TypePiece::all();
     }

     public function taxes(){
         return Taxe::all();

     }

     public function ficheNuitees(){

         return Auth::user()->etablissements->fichenuitees;
     }
     public function fichehebergements(){

        return Auth::user()->etablissements->ficheHebergements->sortBy('id');
    }

     public function ficheNuiteesReto(){
        return Auth::user()->etablissements->fichenuitees;
     }

     public function restorations(){
        return Auth::user()->etablissements->ficheRestaurations;
      }

      public function type(){
        return Auth::user()->etablissements->typeEtablissement;
      }

      public function nuiteesrestorations(){
        return Auth::user()->etablissements->fichenuitees;
      }


      public function nationalites(){
            return Nationalite::all();
      }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
