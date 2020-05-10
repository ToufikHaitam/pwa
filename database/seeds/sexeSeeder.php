<?php

use App\Models\Models\Sexe;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class sexeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
         
            $company =Sexe::create([
                
                'sexe'=>'Homme']);
            
            
            $company =Sexe::create([
                
                'sexe'=>'femme']);
            
            }
    
}
