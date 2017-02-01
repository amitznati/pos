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
        Schema::create('employee_salery', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('salery_type_id')->unsigned();
            $table->decimal('amount', 19, 4);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('employee_id', 'FK_EmployeeSalery_Employee')
                ->references('id')->on('employees')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('salery_type_id', 'FK_EmployeeSalery_SaleryType')
                ->references('id')->on('salery_types')
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
       Schema::dropIfExists('employee_salery');
     }
}
