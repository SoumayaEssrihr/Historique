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
        Schema::create('deleted_condidats', function (Blueprint $table) {
            $table->id('id');
            $table->string('adrs_arab')->nullable();
            $table->string('adrs_frenc')->nullable();
            $table->string('cin')->nullable();
            $table->integer('num_contrat');
            $table->string('observation')->nullable();
            $table->dateTime('date_fin_contrat')->nullable();
            $table->dateTime('date_inscription')->nullable();
            $table->dateTime('date_naissance')->nullable();
            $table->string('email')->nullable();
            $table->string('etat')->nullable();
            $table->string('image_cin')->nullable();
            $table->string('lieu_nais')->nullable();
            $table->string('nom_arab')->nullable();
            $table->string('nom_frenc')->nullable();
            $table->string('prenom_arab')->nullable();
            $table->string('prenom_frenc')->nullable();
            $table->string('profession')->nullable();
            $table->string('profile')->nullable();
            $table->string('ref_web')->nullable();
            $table->string('tel')->nullable();
            $table->double('montant');
            $table->integer('nmbr_heure_pr');
            $table->integer('nmbr_heure_th');
            $table->string('type')->nullable();
            $table->boolean('possede_permis')->default(false);
            $table->bigInteger('id_condidat')->unsigned()->nullable();
            $table->bigInteger('id_cat')->unsigned()->nullable();
            $table->integer('montant_paye');
            $table->integer('reste');
            $table->bigInteger('id_autoe')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleted_condidats');
    }
};
