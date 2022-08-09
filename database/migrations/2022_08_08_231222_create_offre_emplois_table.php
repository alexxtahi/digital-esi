<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('entreprise');
            $table->string('type_offre');
            $table->string('domaine');
            $table->string('poste');
            $table->string('type_contrat')->nullable();
            $table->text('description');
            $table->date('date_publication');
            $table->date('date_limite')->nullable();
            $table->date('img_offre')->nullable();
            $table->date('img_entreprise')->nullable();
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
        Schema::dropIfExists('offre_emplois');
    }
}
