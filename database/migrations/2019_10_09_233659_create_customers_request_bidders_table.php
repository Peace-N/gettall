<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersRequestBiddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_request_bidders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('customer_request_id')->unsigned();//transaction_id
            $table->bigInteger('user_id')->unsigned()->nullable();//bidder //
            $table->bigInteger('service_id')->unsigned();//requested service
            $table->longText('service_request_description');//requested service description
            $table->tinyInteger('request_status')->default(0);
            $table->string('request_feedback')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('customer_request_id')->references('id')->on('customers_request');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('customers_request_bidders');
    }
}
