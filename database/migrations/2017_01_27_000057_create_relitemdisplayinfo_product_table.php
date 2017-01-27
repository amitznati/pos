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
        Schema::create('relitemdisplayinfo_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ItemDisplayInfoID');
            $table->integer('ProductID');


            $table->foreign('ItemDisplayInfoID', 'relitemdisplayinfo_product_ItemDisplayInfoID')
                ->references('ID')->on('itemdisplayinfo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ProductID', 'FK_RelItemDisplayInfo_Product_Product')
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
       Schema::dropIfExists('relitemdisplayinfo_product');
     }
}
