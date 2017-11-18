<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlinterProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blinter_profile', function (Blueprint $table) {
            $table->increments('id')->index();
            //Blinter Skills
            $table->integer('Leadership')->{'1'};
            $table->integer('Innovation')->{'1'};
            $table->integer('Teamwork')->{'1'};
            $table->integer('Management')->{'1'};
            $table->integer('Design')->{'1'};
            $table->integer('Development')->{'1'};
            $table->integer('ProblemResolution')->{'1'};
            $table->integer('Sales')->{'1'};
            $table->integer('Communication')->{'1'};
            $table->integer('Community')->{'1'};
            $table->integer('level')->{'1'};
            $table->integer('experience')->{'1'};
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
        Schema::dropIfExists('blinter_profile');
    }
}