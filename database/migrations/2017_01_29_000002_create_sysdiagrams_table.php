<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysdiagramsTable extends Migration
{
    /**
     * Run the migrations.
     * @table sysdiagrams
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysdiagrams', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('name', 160);
            $table->integer('principal_id');
            $table->increments('diagram_id');
            $table->integer('version')->nullable()->default(null);
            $table->binary('definition')->nullable()->default(null);

            $table->unique(["principal_id", "name"], 'unique_sysdiagrams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('sysdiagrams');
     }
}
