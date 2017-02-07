<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashpaymentTable extends Migration
{
    /**
     * Run the migrations.
     * @table cashpayment
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('recieved_amount', 19, 4);
            $table->decimal('change', 19, 4)->default('0.0000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('cash_payments');
     }
}
