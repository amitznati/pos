<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashierTable extends Migration
{
    /**
     * Run the migrations.
     * @table cashier
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('PCName', 50);
            $table->longText('description')->nullable()->default(null);
            $table->string('Name', 50);
            $table->integer('StoreID');


            $table->foreign('StoreID', 'FK_Cashier_StoreInfo')
                ->references('StoreID')->on('storeinfo')
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
       Schema::dropIfExists('cashier');
     }
}
