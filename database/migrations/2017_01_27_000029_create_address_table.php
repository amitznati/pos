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
        Schema::create('cashpayment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->decimal('RecievedAmount', 19, 4);
            $table->decimal('Change', 19, 4)->default('0.0000');


            $table->foreign('ID', 'cashpayment_ID')
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
       Schema::dropIfExists('cashpayment');
     }
}
