<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyattendanceTable extends Migration
{
    /**
     * Run the migrations.
     * @table dailyattendance
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyattendance', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empId');
            $table->timestamp('entryTime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('exitTime')->nullable()->default(null);
            $table->tinyInteger('isPresent')->default('1');


            $table->foreign('empId', 'dailyattendance_empId')
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
       Schema::dropIfExists('dailyattendance');
     }
}
