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
        Schema::create('deleted_employees', function (Blueprint $table) {
                $table->id('auto_id');
                $table->datetime('date_embauche')->nullable();
                $table->datetime('date_naiss_emp')->nullable();
                $table->datetime('expir_carte_monit')->nullable();
                $table->string('type_employee', 31);
                $table->string('addr_emp')->nullable();
                $table->string('capn_emp')->nullable();
                $table->string('carte_moniteur')->nullable();
                $table->string('cin')->nullable();
                $table->string('email_emp')->nullable();
                $table->string('lieu_naiss_emp')->nullable();
                $table->string('nom_emp')->nullable();
                $table->string('nom_emp_arb')->nullable();
                $table->string('npc_emp')->nullable();
                $table->string('observations')->nullable();
                $table->string('prenom_emp')->nullable();
                $table->string('prenom_emp_arb')->nullable();
                $table->string('tel')->nullable();
                $table->enum('type_emp', ['Directeur', 'Moniteur', 'Secretaire'])->nullable();
                $table->enum('type_moniteur', ['Pratique', 'Theorique'])->nullable();
                $table->string('etat')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleted_employees');
    }
};
