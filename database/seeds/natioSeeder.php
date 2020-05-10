<?php

use App\Nationalite;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class natioSeeder extends Seeder
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
            
            $company =Nationalite::create([
                
                'nationalite'=>$faker->country
                ]);
            
            }
    }
}
