<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradePointAveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_point_averages', function (Blueprint $table) {
            //Record academico desde el primer hasta el quinto ciclo

            $table->increments('id');
            $table->unsignedInteger('studentId');
            $table->string('average');
            $table->foreign('studentId')->references('id')->on('students');
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
        Schema::dropIfExists('grade_point_averages');
    }
}
