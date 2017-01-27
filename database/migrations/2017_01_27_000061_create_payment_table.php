<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     * @table payment
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->decimal('TotalPayed', 19, 4);
            $table->integer('OrderID');
            $table->char('PaymentTypeName', 10);


            $table->foreign('OrderID', 'FK_Payment_Order')
                ->references('ID')->on('order')
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
       Schema::dropIfExists('payment');
     }
}
