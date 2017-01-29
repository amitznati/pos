<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelitemdisplayinfoProductTable extends Migration
{
    /**
     * Run the migrations.
     * @table relitemdisplayinfo_product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_item_display_info_product', function (Blueprint $table) {
            $table->integer('item_display_info_id')->unsigned();
            $table->integer('product_id')->unsigned();


            $table->foreign('item_display_info_id', 'relitemdisplayinfo_product_ItemDisplayInfoID')
                ->references('id')->on('item_display_info')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('product_id', 'FK_RelItemDisplayInfo_Product_Product')
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
       Schema::dropIfExists('relitemdisplayinfo_product');
     }
}
