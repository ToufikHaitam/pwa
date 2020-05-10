<?php

use App\Models\Models\FicheHebergement;
use App\Models\Models\FicheNuiteeRestauration;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class fichenuiteerest extends Seeder
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
        $fcihes =FicheHebergement::all()->pluck('id');
         


        foreach(range(1,50) as $index){
            
            $company =FicheNuiteeRestauration::create([
                'date_arrivee' => $faker->date(),
                'date_depart'=>$faker->date(),
                'nombre_mineurs15'=>$faker->numberBetween(1,4),
                'nombre_mineurs1518'=>$faker->numberBetween(1,5),
                'num_chambre'=>$faker->numberBetween(1,200),
                'fiche_hebergement_id'=>$faker->randomElement($fcihes),
                'montant_restoration'=>$faker->numberBetween(100,3000),
                'montant_boissons'=>$faker->numberBetween(100,3000),
                'montant_supplimentaires'=>$faker->numberBetween(100,3000),

            
            ]);
    }
}}
