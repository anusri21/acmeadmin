<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcmeStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acme-student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('dob');
            $table->string('email');
            $table->string('gender');
            $table->integer('age');
            $table->string('student_class');
            $table->string('student_school');
            $table->string('student_syllabus');
            $table->string('student_image');
            $table->string('admission_no');
            $table->string('admission_date');
            $table->string('doj');
           
            // $table->string('school_zip');
            // $table->integer('school_mobile');
            // $table->string('school_fax');
            $table->string('course');

            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->string('mother_occupation');
            $table->string('father_mobile');
            $table->string('mother_mobile');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('state');
            $table->string('status');
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
        Schema::dropIfExists('acme-student');
    }
}
