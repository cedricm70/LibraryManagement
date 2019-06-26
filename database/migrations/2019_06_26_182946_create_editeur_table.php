<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editeur', function (Blueprint $table) {
            $table->increments('EditeurNum');
            $table->string("EditeurNom", 40);
            $table->integer("EditeurCreation");
            $table->string("EditeurAdresse", 60)->nullable();
            $table->string("EditeurCP", 11)->nullable();
            $table->string("EditeurVille", 50)->nullable();
            $table->string("EditeurTel", 11)->nullable();
            $table->string("EditeurFax", 11)->nullable();
            $table->string("EditeurMail", 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editeur');
    }
}
