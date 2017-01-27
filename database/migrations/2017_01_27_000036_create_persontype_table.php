<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersontypeTable extends Migration
{
    /**
     * Run the migrations.
     * @table persontype
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persontype', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('personTypeId');
            $table->string('personTypeName', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('persontype');
     }
}
