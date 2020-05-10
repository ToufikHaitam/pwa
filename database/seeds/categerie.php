<?php

use App\Models\Models\CategerieEtablissement;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class categerie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create();
         foreach(range(1, 50) as $index)
        {
            CategerieEtablissement::create([
                'categerie' => $faker->userName(),
                
            ]);
        }
    }
}
