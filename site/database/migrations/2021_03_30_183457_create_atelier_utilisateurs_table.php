<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtelierUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atelier_utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_personne');

            $table->unsignedBigInteger('ateliers_id');
            $table->foreign('ateliers_id')->references('id')->on('ateliers');

            $table->unsignedBigInteger('utilisateurs_id');
            $table->foreign('utilisateurs_id')->references('id')->on('utilisateurs');
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
        Schema::dropIfExists('atelier_utilisateurs');
    }
}
