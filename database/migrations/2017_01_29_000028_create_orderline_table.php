<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderlineTable extends Migration
{
    /**
     * Run the migrations.
     * @table orderline
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->double('quantity');
            $table->decimal('product_unit_price', 19, 4);
            $table->decimal('product_total_price', 19, 4);


            $table->foreign('order_id', 'orderline_ordId')
                ->references('id')->on('orders')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('product_id', 'FK_OrderLine_Product')
                ->references('id')->on('products')
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
       Schema::dropIfExists('order_lines');
     }
}
