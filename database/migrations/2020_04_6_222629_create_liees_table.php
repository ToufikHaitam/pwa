<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLieesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('url');
            $table->unsignedBigInteger('taxe_id');
            $table->foreign('taxe_id')->references('id')->on('taxes');
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
        Schema::dropIfExists('_users__etablissement');
    }
}
