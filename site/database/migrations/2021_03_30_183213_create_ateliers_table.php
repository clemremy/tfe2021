<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAteliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->integer('nb_places');
            $table->boolean('actif');
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
        Schema::dropIfExists('ateliers');
    }
}
