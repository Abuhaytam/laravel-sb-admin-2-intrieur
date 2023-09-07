<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('extraits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('neLe');
            $table->string('année');
            $table->date('dateNaissance');
            $table->string('villeNaissance');
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('nomPere');
            $table->string('nomMere');
            $table->string('mgd'); /**Mentions marginales de dècés */
            $table->text('certifie');/**Extrait certifié conforme aux registres de l'Etat Civil par nous
            officier de l'Etat Civil
             */
            $table->string('bureau');
            $table->string('lieu');
            $table->date('dateSignature');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extraits');
    }
};
