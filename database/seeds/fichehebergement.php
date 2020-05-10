<?php

use App\Models\Models\FicheHebergement ;
use App\Models\Models\Sexe;
use App\Motif;
use App\Nationalite;
use App\TypePiece;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;


class fichehebergements extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // following line retrieve all the user_ids from DB
        $sexs =Sexe::all()->pluck('id');
        $nationalites =Nationalite::all()->pluck('id');
        $Motifs =Motif::all()->pluck('id');
        $typepiece =TypePiece::all()->pluck('id');


        foreach(range(1,50) as $index){
            
            $company =FicheHebergement::create([
                'nom' => $faker->name(),
                'profession'=>$faker->name(),
                'date_naissance'=>$faker->date(),
                'date_delivrance'=> $faker->date(),
                'pays'=>$faker->country,
                'num_piece'=>$faker->randomNumber(),
                'lieu_naissance'=>$faker->address,
                'etablissement_id'=>1,
                'sexe_id'=>$faker->randomElement($sexs),
                'motif_id'=>$faker->randomElement($Motifs),
                'nationalite_id'=>$faker->randomElement($nationalites),
                'type_piece_id'=>$faker->randomElement($typepiece),

            ]);
        }
    }
}
