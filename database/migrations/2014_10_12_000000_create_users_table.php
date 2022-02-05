<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sexe')->nullable();
            $table->string('date')->nullable();
            $table->string('cadre')->nullable();
            $table->integer('tel')->nullable();
            $table->string('presentation')->nullable();
            $table->string('perimetre')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->integer('code')->nullable();
            $table->Integer('activite_id')->unsigned();
            $table->string('avatar')->default('default.png');
            $table->string('email')->unique();
            $table->boolean('status')->nullable;
            $table->string('google_id')->nullable();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
