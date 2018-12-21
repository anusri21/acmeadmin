<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcmeEnquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acme-enquiry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('alternate_email');
            $table->string('phone');
            $table->string('alternate_phone');
            $table->string('course');
            $table->string('enquiry');
            $table->string('doj');
            $table->string('address');
            $table->string('reference');
            $table->string('comments');
            $table->string('otherref');
            $table->string('otherenq');
            $table->string('student_name');
            $table->string('student_class');
            $table->string('student_syllabus');
            $table->string('student_school');
            $table->integer('status');
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
        Schema::dropIfExists('acme-enquiry');
    }
}
