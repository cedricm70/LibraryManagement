<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur', function (Blueprint $table) {
            $table->increments('AuteurId');
            $table->string("AuteurNom", 40);
            $table->string("AuteurPrenom", 20);
            $table->string("AuteurPseudo", 50)->nullable();
            $table->date("AuteurDateNaiss")->nullable();
            $table->date("AuteurDeces")->nullable();
            $table->string("AuteurPays", 30);
            $table->string("AuteurBiographie", 2000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteur');
    }
}
