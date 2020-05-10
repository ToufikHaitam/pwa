<?php

namespace App\Http\Controllers;

use App\Http\Requests\FicheHebergementRequest;
use App\Models\Models\FicheHebergement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FicheHebergementController extends Controller
{
    public function index()
    {
        $fichehebergements = FicheHebergement::latest()->get();

        return response(['data' => $fichehebergements ], 200);
    }

    public function store(FicheHebergementRequest $request)
    {

        $validator = Validator::make($request->all(),[
            'nom'       =>  'required|unique:fiche_hebergements',
            
          ]);




          if ($validator->fails()){

            return response()->json(['error'=>$validator->errors()->all()]);


			
        }


       $etablissement_id =Auth::user()->etablissements->id; 
       $request->request->add(['etablissement_id' => $etablissement_id]);
       $fichehebergement = FicheHebergement::create($request->all());
       if($fichehebergement){ 
        $arr = array('msg' => 'la fiche a ete bien enregistre MERCI 👍 😉 ✔!', 'status' => true);
    }
       return Response()->json($arr);

     

    }

    public function show($id)
    {
        $fichehebergement = FicheHebergement::with('fichenuittes')->findOrFail($id);
       
        return response($fichehebergement, 200);
    }

    public function update(FicheHebergementRequest $request, $id)
    {
        $fichehebergement = FicheHebergement::findOrFail($id);
        $fichehebergement->update($request->all());

        return response(['data' => $fichehebergement ], 200);
    }

    public function destroy($id)
    {
        $fiche=FicheHebergement::find($id);
        $fiche->fichenuittes()->delete();
        $fiche->ficheNuiteeRestaurations()->delete();
        $fiche->delete();

        return response()->json([
    
            'success' => 'Record deleted successfully!'
    
        ]);;
    }
}
