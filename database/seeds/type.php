<?php

use App\Models\Models\TypeEtablissement;
use Illuminate\Database\Seeder;

class type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new TypeEtablissement();
            $user->type ="type-".$i;
            
            $user->save();
        }
    }
}
