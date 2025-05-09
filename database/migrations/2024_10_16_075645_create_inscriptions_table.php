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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('civilité');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nationalite');
            $table->string('dateNaissance');
            $table->string('pays');
            $table->string('ville');
            $table->string('phone');
            $table->string('email');
            $table->string('diplome_url');
            $table->string('identite_url');
            $table->string('photo_url');
          

            $table->unsignedBigInteger('filiere_id');
            $table->unsignedBigInteger('niveau_etude_id');



            $table->timestamps();

            $table->foreign('filiere_id')
            ->references('id')
            ->on('filieres')
            ->onDelete('cascade');
            $table->foreign('niveau_etude_id')
            ->references('id')
            ->on('niveau_etudes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
};
