<?php

use App\TypePiece;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class typepieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company =TypePiece::create([
                
            'piece'=>'CNI']);
        $company =TypePiece::create([
                
                'piece'=>'Passport']);

        $company =TypePiece::create([
                
                    'piece'=>'Carte Sejour']);
    
        
    }
}
