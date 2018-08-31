<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('studentId');
            $table->unsignedInteger('languageId');
            $table->enum('level',['avanzando','medio','basico']);
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('languageId')->references('id')->on('languages');
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
        Schema::dropIfExists('student_languages');
    }
}
