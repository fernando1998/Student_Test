<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentSituationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_situations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('companyActivitiesId');
            $table->unsignedInteger('areaId');
            $table->string('companyName');
            $table->enum('formationArea',['0','1']);
            $table->string('job'); //Puesto de trabajo
            $table->string('salary');
            $table->enum('pasantia',['c&r','c','p','np']); //C&R : completo y reconocimiento
            //c : completo || p : pendiente || np : no presento


            $table->foreign('companyActivitiesId')->references('id')->on('company_activities');
            $table->foreign('areaId')->references('id')->on('areas');
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
        Schema::dropIfExists('employment_situations');
    }
}
