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
        Schema::create('orderline', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ordId');
            $table->integer('prodId');
            $table->double('quantity');
            $table->decimal('prodUnitPrice', 19, 4);
            $table->decimal('prodTotalPrice', 19, 4);


            $table->foreign('ordId', 'orderline_ordId')
                ->references('ID')->on('order')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('prodId', 'FK_OrderLine_Product')
                ->references('ID')->on('product')
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
       Schema::dropIfExists('orderline');
     }
}
