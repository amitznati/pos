<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelvandorcontactTable extends Migration
{
    /**
     * Run the migrations.
     * @table relvandorcontact
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relvandorcontact', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('VendorID');
            $table->integer('ContactID');


            $table->foreign('ContactID', 'FK_RelVandorContact_Contact')
                ->references('ID')->on('contact')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('VendorID', 'relvandorcontact_VendorID')
                ->references('ID')->on('vendor')
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
       Schema::dropIfExists('relvandorcontact');
     }
}
