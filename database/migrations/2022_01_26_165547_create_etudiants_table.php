<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('matri_etud');
            $table->string('date_naiss_etud');
            $table->string('bio')->nullable();
            $table->string('promotion')->default('2019-2022');
            $table->integer('id_user');
            $table->integer('id_classe');
            $table->boolean('est_diplome')->default(false);
            $table->string('filiere_diplome')->nullable();
            $table->string('cv_path')->nullable();
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
        Schema::dropIfExists('etudiants');
    }
}
