<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Surname');
            $table->date('Both_day');
            $table->string('Teaching_order');
            $table->integer('Old_Teaching');
            $table->integer('Old_SchoolYears');
            $table->unsignedBigInteger('matiere_id');
            $table->unsignedBigInteger('classe_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');
            $table->foreign('classe_id')->references('id')->on('classes');
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
        Schema::dropIfExists('enseignant');
    }
}
