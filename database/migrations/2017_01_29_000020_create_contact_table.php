<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     * @table contact
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->longText('full_name')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->string('phone', 50)->nullable()->default(null);
            $table->longText('email')->nullable()->default(null);
            $table->integer('address_id')->unsigned()->nullable()->default(null);
            $table->string('password', 10)->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('address_id', 'FK_Contact_Address')
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
       Schema::dropIfExists('contact');
     }
}
