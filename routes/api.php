<?php

use App\liee;
use App\Taxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/postdata',function(Request $request){
  $validatedData = $request->validate([
    'email' => 'required|unique:liees|max:255',
    
]);
$liee= new liee();
$liee->email=$request->input('email');
$liee->url=$request->input('website');
$liee->taxe_id=$request->input('taxe_id');
 $liee->save();

return response('data bien insered ');


});

Route::get('/liees',function(){
  return json_encode(liee::all());
});

 

Route::get('/taxes',function(){
  $taxes=Taxe::Take(12)->get();
  header('Access-Control-Allow-Origin: *');


  return json_encode($taxes);

});