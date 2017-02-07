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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total_payed', 19, 4);
            $table->integer('order_id')->unsigned();
            $table->morphs('paymentable');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));


            $table->foreign('order_id', 'FK_Payment_Order')
                ->references('id')->on('orders')
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
       Schema::dropIfExists('payments');
     }
}
