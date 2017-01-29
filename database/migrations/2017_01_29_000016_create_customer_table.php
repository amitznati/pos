<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     * @table customer
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->longText('full_name')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->string('phone', 50)->nullable()->default(null);
            $table->longText('email')->nullable()->default(null);
            $table->integer('address_id')->unsigned()->nullable()->default(null);
            $table->char('password', 10)->nullable()->default(null);
            $table->integer('person_type_id')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('address_id', 'FK_Customer_Address')
                ->references('id')->on('addresses')
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
       Schema::dropIfExists('customers');
     }
}
