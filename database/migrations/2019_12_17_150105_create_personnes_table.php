<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('phone');
            $table->string('competence_s');
            $table->date('date_affectation_m');
            $table->string('adresse_p');
            $table->boolean('inam_p');
            $table->integer('an_experience_a');
            $table->integer('niveau')->default('3');
            $table->foreignId('departement_id')->constrained();
            $table->foreignId('specialite_id')->constrained();
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
        Schema::dropIfExists('personnes');
    }
}
