<?php

use App\Forchete;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class forchette extends Seeder
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
            
            $company =Forchete::create([
                'forchette' => $faker->name,
                 
            ]);
        }
    }
}
