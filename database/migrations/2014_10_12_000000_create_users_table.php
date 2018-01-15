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
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //Blinter Skills
            $table->integer('leadership');
            $table->integer('innovation');
            $table->integer('teamwork');
            $table->integer('management');
            $table->integer('design');
            $table->integer('development');
            $table->integer('problemresolution');
            $table->integer('sales');
            $table->integer('communication');
            $table->integer('community');
            $table->integer('level');
            $table->integer('experience');
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
