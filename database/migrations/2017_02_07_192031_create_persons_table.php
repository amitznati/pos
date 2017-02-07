<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('full_name')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->string('phone', 50)->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->integer('address_id')->unsigned()->nullable()->default(null);
            $table->string('password', 10)->unique();
            $table->morphs('personable');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('address_id', 'FK_Person_Address')
                ->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
