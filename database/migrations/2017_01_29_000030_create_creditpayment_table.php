<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditpaymentTable extends Migration
{
    /**
     * Run the migrations.
     * @table creditpayment
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->char('card_end_with', 4);
            $table->integer('number_of_payments')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('credit_payments');
     }
}
