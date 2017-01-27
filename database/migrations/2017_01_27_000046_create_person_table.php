<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     * @table person
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('FirstName', 50);
            $table->string('LastName', 50);
            $table->longText('FullName')->nullable()->default(null);
            $table->date('Birthday')->nullable()->default(null);
            $table->string('PhoneNum', 50)->nullable()->default(null);
            $table->longText('Email')->nullable()->default(null);
            $table->integer('AddressID')->nullable()->default(null);
            $table->tinyInteger('Mode')->default('1');
            $table->char('Password', 10)->nullable()->default(null);
            $table->integer('PersonTypeID')->nullable()->default(null);


            $table->foreign('AddressID', 'FK_Person_Address')
                ->references('ID')->on('address')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('PersonTypeID', 'FK_Person_PersonType')
                ->references('personTypeId')->on('persontype')
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
       Schema::dropIfExists('person');
     }
}
