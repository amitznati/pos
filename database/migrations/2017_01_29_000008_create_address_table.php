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
        Schema::create('address', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('StreetName', 50)->nullable()->default(null);
            $table->integer('StreetNumber')->nullable()->default(null);
            $table->integer('HousNumber')->nullable()->default(null);
            $table->string('City', 50)->nullable()->default(null);
            $table->integer('Zip')->nullable()->default(null);
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
