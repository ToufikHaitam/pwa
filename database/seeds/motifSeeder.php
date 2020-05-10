<?php

use App\Motif;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class motifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $faker = Faker::create();
        foreach(range(1,50) as $index){
            
            $company =Motif::create([
                
                'motif'=>$faker->name()]);
            
            }
    }
}
