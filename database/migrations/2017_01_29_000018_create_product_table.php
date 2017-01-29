<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('dept_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('vandor_id')->unsigned()->nullable()->default(null);
            $table->decimal('sale_price', 19, 4);
            $table->decimal('bay_price', 19, 4)->nullable()->default(null);
            $table->string('bacode')->nullable()->default(null);
            $table->string('brand')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
            $table->longText('description')->nullable()->default(null);


            $table->foreign('dept_id', 'FK_Product_Department')
                ->references('id')->on('departments')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('group_id', 'FK_Product_Group')
                ->references('id')->on('groups')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('vandor_id', 'FK_Product_Vendor')
                ->references('id')->on('vendors')
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
       Schema::dropIfExists('product');
     }
}
