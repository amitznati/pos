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
            $table->integer('id')->unsigned();
            $table->decimal('recieved_amount', 19, 4);
            $table->decimal('change', 19, 4)->default('0.0000');


            $table->foreign('id', 'cashpayment_ID')
                ->references('id')->on('payments')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('cashpayment');
     }
}
