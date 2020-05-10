<?php

use App\Models\Models\SousType as ModelsSousType;
use App\Models\Models\Stype;
use App\Models\Models\TypeEtablissement;
use App\Models\Models\Typesous;
use App\soutype;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class soustype extends Seeder
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
        $users =TypeEtablissement::all()->pluck('id');
        foreach(range(1,50) as $index){
            
            $company =soutype::create([
                'soustype' => $faker->text,
                'type_id' => $faker->randomElement($users),
            ]);
        }
    }
}
