<?php

use App\Models\Models\Etablissement;
 use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
        $this->call(categerie::class);
        $this->call(type::class);
        $this->call(soustype::class);
        $this->call(forchette::class);
        $this->call(etablissementSeeder::class);
        $this->call(sexeSeeder::class);
        $this->call(natioSeeder::class);
        $this->call(typepieceSeeder::class);
        $this->call(motifSeeder::class);
        $this->call(fichehebergements::class);
        $this->call(fnuiteSeeder::class);
        $this->call(fichenuiteerest::class);
        $this->call(ficherest::class);
    }
}
