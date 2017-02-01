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
        Schema::create('daily_attendance', function (Blueprint $table) {
            $table->integer('employee_id')->unsigned();
            $table->timestamp('entryTime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('exitTime')->nullable()->default(null);
            $table->boolean('isPresent')->default(true);


            $table->foreign('employee_id', 'dailyattendance_empId')
                ->references('id')->on('employees')
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
       Schema::dropIfExists('daily_attendance');
     }
}
