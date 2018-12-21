<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcmePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acme-paymentdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_type');
            $table->string('payment_category');
            $table->string('username');
            $table->string('amount');
            $table->string('phone');
            $table->string('payment_method');
            $table->string('date');
            $table->string('comments');
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
        Schema::dropIfExists('acme-paymentdetails');

    }
}
