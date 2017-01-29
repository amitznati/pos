<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     * @table address
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_name', 50)->nullable()->default(null);
            $table->integer('street_number')->unsigned()->nullable()->default(null);
            $table->integer('hous_number')->unsigned()->nullable()->default(null);
            $table->string('city', 50)->nullable()->default(null);
            $table->integer('zip')->unsigned()->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('address');
     }
}
