<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_matieres', function (Blueprint $table) {
            $table->id();
            $table->double("note1");
            $table->double("examen");
            $table->foreignId('etudiants_id')->constrained();
            $table->foreignId('matieres_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant_matieres');
    }
};
