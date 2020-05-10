<?php

use App\Forchete;
use App\Models\Models\CategerieEtablissement;
use App\Models\Models\Etablissement;
use App\Models\Models\TypeEtablissement;
use App\soutype;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class etablissementSeeder extends Seeder
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
        $types =TypeEtablissement::all()->pluck('id');
        $soutypes =soutype::all()->pluck('id');
        $forchettes =Forchete::all()->pluck('id');
        $cats =CategerieEtablissement::all()->pluck('id');


        foreach(range(1,50) as $index){
            
            $company =Etablissement::create([
                'nom' => $faker->name(),
                'adresse'=>$faker->address,
                'capacite'=>$faker->randomNumber(),
                'type_id'=> $faker->randomElement($types),
                'sous_type_id'=>$faker->randomElement($soutypes),
                'categerie_etablissement_id'=>$faker->randomElement($cats),
                'forchette_id'=>$faker->randomElement($forchettes),

            ]);
        }
    }
}
