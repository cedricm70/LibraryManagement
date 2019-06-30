<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd', function (Blueprint $table) {
            $table->increments('BdId');
            $table->string('BdTitre', 100);
            $table->string('BdIsbn', 18);
            $table->string('BdTome', 10);
            $table->string('BdParution', 7);
            $table->integer('BdNbPages');
            $table->string('BdImage', 100);
            $table->string('BdCouleur', 25);
            $table->string('BdCommentaires', 200);
            $table->string('BdFormat', 60);
            $table->integer('NumSerie');
            $table->integer('NumEditeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd');
    }
}
