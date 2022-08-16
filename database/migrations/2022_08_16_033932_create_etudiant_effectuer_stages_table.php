<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantEffectuerStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_effectuer_stages', function (Blueprint $table) {
            $table->id();
            $table->integer('id_etudiant');
            $table->integer('id_stage');
            $table->string('entreprise');
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->string('annee_scolaire')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('etudiant_effectuer_stages');
    }
}
