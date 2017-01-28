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
        Schema::create('creditpayment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->char('CardEndWith', 4);
            $table->integer('NumberOfPayments')->default('1');


            $table->foreign('ID', 'creditpayment_ID')
                ->references('ID')->on('payment')
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
       Schema::dropIfExists('creditpayment');
     }
}
