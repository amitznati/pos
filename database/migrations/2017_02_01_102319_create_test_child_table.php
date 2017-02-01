<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_child', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('child_filed');
            $table->foreign('id', 'FK_childid_parentid')
                ->references('id')->on('test_parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_child');
    }
}
