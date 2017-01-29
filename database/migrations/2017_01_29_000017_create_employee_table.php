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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->longText('full_name')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->string('phone', 50)->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->integer('address_id')->unsigned()->nullable()->default(null);
            $table->char('password', 10)->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('address_id', 'FK_Employee_Address')
                ->references('id')->on('addresses')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('role_id', 'FK_Employee_Role')
                ->references('id')->on('roles')
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
       Schema::dropIfExists('employees');
     }
}
