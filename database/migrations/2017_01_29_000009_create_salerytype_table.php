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
        Schema::create('salery_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
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
       Schema::dropIfExists('salery_types');
     }
}
