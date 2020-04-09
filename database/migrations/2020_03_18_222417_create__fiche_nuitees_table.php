<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheNuiteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_nuitees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date_arrivee');	
            $table->dateTime('date_depart');
            $table->integer('nombre_mineurs15');
            $table->integer('nombre_mineurs1518'); 
            $table->integer('num_chmabre');	
            $table->unsignedBigInteger('fiche_hebergement_id');
            $table->foreign('fiche_hebergement_id')->references('id')->on('fiche_hebergements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_fiche_nuitees');
    }
}
