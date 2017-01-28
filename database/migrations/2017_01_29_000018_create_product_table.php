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
        Schema::create('product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('prodName', 50);
            $table->integer('deptId');
            $table->integer('groupId');
            $table->integer('VandorID')->nullable()->default(null);
            $table->decimal('salePrice', 19, 4);
            $table->decimal('bayPrice', 19, 4)->nullable()->default(null);
            $table->longText('bacode')->nullable()->default(null);
            $table->longText('brand')->nullable()->default(null);
            $table->date('lastUpdateDate')->nullable()->default(null);
            $table->tinyInteger('mode');
            $table->longText('description')->nullable()->default(null);


            $table->foreign('deptId', 'FK_Product_Department')
                ->references('ID')->on('department')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('groupId', 'FK_Product_Group')
                ->references('ID')->on('group')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('VandorID', 'FK_Product_Vendor')
                ->references('ID')->on('vendor')
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
