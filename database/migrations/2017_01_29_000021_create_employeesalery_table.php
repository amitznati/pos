<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesaleryTable extends Migration
{
    /**
     * Run the migrations.
     * @table employeesalery
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeesalery', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('EmployeeID');
            $table->integer('SaleryTypeID');
            $table->decimal('Amount', 19, 4);
            $table->date('StartDate');
            $table->date('EndDate')->nullable()->default(null);


            $table->foreign('EmployeeID', 'FK_EmployeeSalery_Employee')
                ->references('ID')->on('employee')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('SaleryTypeID', 'FK_EmployeeSalery_SaleryType')
                ->references('SaleryTypeID')->on('salerytype')
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
       Schema::dropIfExists('employeesalery');
     }
}
