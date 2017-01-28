<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreinfoTable extends Migration
{
    /**
     * Run the migrations.
     * @table storeinfo
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storeinfo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('StoreID');
            $table->string('Name', 50);
            $table->integer('AddressID')->nullable()->default(null);
            $table->string('BranchName', 50)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('storeinfo');
     }
}
