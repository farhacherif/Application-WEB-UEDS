<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->date('date');
            $table->string('lieu');
            $table->text('description');
            $table->string('image');
            $table->Integer('activite_id')->unsigned();
            $table->timestamps();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
