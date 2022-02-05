<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('donateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('montant');
            $table->string('type');
            $table->string('nom');
            $table->string('prenom');
            $table->string('pays');
            $table->string('adresse');
            $table->string('mail');
            $table->integer('tel');
            $table->integer('user_id');
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
        Schema::dropIfExists('donateurs');
    }
}
