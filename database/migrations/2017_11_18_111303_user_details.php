<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id')->index();
            //Datos Personales
            $table->string('firtsname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->mediumText('msg_personal')->nulleable;
            $table->mediumText('Bio')->nulleable;
            $table->string('Twitter')->nulleable;
            $table->string('Facebook')->nulleable;
            $table->integer('Celular')->nulleable;
            $table->integer('DNI')->nulleable;
             //Llave Foreana
            $table->integer('user_id')->unsigned();
            //Relacion
            Schema::enableForeignKeyConstraints();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            //Creacion / Actualizacion
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
        Schema::dropIfExists('user_details');
    }
}
