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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('total_payment', 19, 4);
            $table->integer('customer_id')->unsigned()->nullable()->default(null);
            $table->integer('employee_id')->unsigned();
            $table->boolean('IsCloseInZ')->default(false);
            $table->integer('z_num')->unsigned()->nullable()->default(null);
            $table->integer('tax_id')->unsigned();
            $table->integer('daily_number')->unsigned()->default('0');
            // $table->integer('CashierID')->unsigned();
            // $table->integer('StoreID')->unsigned();


            // $table->foreign('CashierID', 'FK_Order_Cashier')
            //     ->references('ID')->on('cashier')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');

            $table->foreign('customer_id', 'FK_Order_Customer')
                ->references('id')->on('customers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('employee_id', 'FK_Order_Employee')
                ->references('id')->on('employees')
                ->onDelete('no action')
                ->onUpdate('no action');

            // $table->foreign('StoreID', 'FK_Order_StoreInfo')
            //     ->references('StoreID')->on('storeinfo')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');

            $table->foreign('tax_id', 'FK_Order_Tax')
                ->references('id')->on('taxes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('z_num', 'FK_Order_ZReport')
                ->references('z_number')->on('z_reports')
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
       Schema::dropIfExists('orders');
     }
}
