<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcmeCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acme-course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coursecode');
            $table->string('coursename');
            $table->string('category');
            $table->string('description');
            $table->string('startdate');
            $table->string('enddate');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acme-course');
    }
}
