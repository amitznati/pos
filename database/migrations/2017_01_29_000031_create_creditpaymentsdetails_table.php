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
        Schema::create('creditpaymentsdetails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('CreditPaymentID');
            $table->integer('PaymentNumber');
            $table->decimal('Amount', 19, 4);


            $table->foreign('CreditPaymentID', 'FK_CreditPaymentsDetails_CreditPayment')
                ->references('ID')->on('creditpayment')
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
       Schema::dropIfExists('creditpaymentsdetails');
     }
}
