<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 100);
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('direccion', 150);
            $table->string('telefono', 50);
            $table->string('ciudad_residencia', 100);
            $table->string('ciudad_origen', 100);
            $table->string('nacionalidad', 100);
            $table->string('programa', 20);
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
        Schema::dropIfExists('students');
    }
}
