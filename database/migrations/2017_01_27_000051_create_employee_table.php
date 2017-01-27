<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     * @table employee
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('RoleID');


            $table->foreign('ID', 'employee_ID')
                ->references('ID')->on('person')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('RoleID', 'FK_Employee_Role')
                ->references('ID')->on('role')
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
       Schema::dropIfExists('employee');
     }
}
