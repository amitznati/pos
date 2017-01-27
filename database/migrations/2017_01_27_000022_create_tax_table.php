<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZreportTable extends Migration
{
    /**
     * Run the migrations.
     * @table zreport
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zreport', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ZNumber');
            $table->integer('empId');
            $table->timestamp('reportDate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('reprotTotalAmount', 19, 4);


            $table->foreign('empId', 'FK_ZReport_Employee')
                ->references('ID')->on('employee')
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
       Schema::dropIfExists('zreport');
     }
}
