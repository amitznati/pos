<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     * @table vendor
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('CompanyName', 50);
            $table->tinyInteger('Mode')->default('1');
            $table->integer('AddressID')->nullable()->default(null);


            $table->foreign('AddressID', 'FK_Vendor_Address')
                ->references('ID')->on('address')
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
       Schema::dropIfExists('vendor');
     }
}
