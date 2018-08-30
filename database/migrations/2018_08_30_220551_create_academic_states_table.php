<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_states', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('studentId');
            $table->enum('condition', ['regular', 'credito','becado']);
            $table->enum('statusCourse', ['all', '1cp', '2cp', '3cp', '+3cp']);
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
        Schema::dropIfExists('academic_states');
    }
}
