<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalerytypeTable extends Migration
{
    /**
     * Run the migrations.
     * @table salerytype
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salerytype', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('SaleryTypeID');
            $table->string('SaleryTypeName', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('salerytype');
     }
}
