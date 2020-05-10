<?php

use App\Models\Models\FicheRestaurationSeule;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class ficherest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        


        foreach(range(1,50) as $index){
            
            $company =FicheRestaurationSeule::create([
                 'etablissement_id'=>1,
                'montant_restoration'=>$faker->numberBetween(100,3000),
                'montant_boissons'=>$faker->numberBetween(100,3000),
                'montant_supplimentaires'=>$faker->numberBetween(100,3000),

            
            ]);
    }

}
}
