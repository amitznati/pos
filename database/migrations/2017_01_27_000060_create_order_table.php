<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     * @table order
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->date('PurchaseDate');
            $table->decimal('TotalPayment', 19, 4);
            $table->integer('CustomerID')->nullable()->default(null);
            $table->integer('EmployeeID');
            $table->tinyInteger('IsCloseInZ')->default('0');
            $table->integer('Znum')->nullable()->default(null);
            $table->integer('TaxID');
            $table->integer('DailyNumber')->default('0');
            $table->integer('CashierID');
            $table->integer('StoreID');


            $table->foreign('CashierID', 'FK_Order_Cashier')
                ->references('ID')->on('cashier')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('CustomerID', 'FK_Order_Customer')
                ->references('ID')->on('customer')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('EmployeeID', 'FK_Order_Employee')
                ->references('ID')->on('employee')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('StoreID', 'FK_Order_StoreInfo')
                ->references('StoreID')->on('storeinfo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('TaxID', 'FK_Order_Tax')
                ->references('ID')->on('tax')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Znum', 'FK_Order_ZReport')
                ->references('ZNumber')->on('zreport')
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
       Schema::dropIfExists('order');
     }
}
