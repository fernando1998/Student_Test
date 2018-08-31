<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soft_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('studentId');
            $table->string('name');
            $table->enum('level',['0','1','2','3','4']);
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
        Schema::dropIfExists('soft_skills');
    }
}
