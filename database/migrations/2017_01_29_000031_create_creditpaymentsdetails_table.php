<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditpaymentsdetailsTable extends Migration
{
    /**
     * Run the migrations.
     * @table creditpaymentsdetails
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payments_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credit_payment_id')->unsigned();
            $table->integer('PaymentNumber');
            $table->decimal('Amount', 19, 4);


            $table->foreign('credit_payment_id', 'FK_CreditPaymentsDetails_CreditPayment')
                ->references('id')->on('credit_payments')
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
       Schema::dropIfExists('credit_payments_details');
     }
}
