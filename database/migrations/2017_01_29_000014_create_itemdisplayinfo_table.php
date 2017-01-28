<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemdisplayinfoTable extends Migration
{
    /**
     * Run the migrations.
     * @table itemdisplayinfo
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdisplayinfo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('MenuID');
            $table->integer('ItemID');
            $table->tinyInteger('IsMenu');
            $table->string('DisplayName', 50);
            $table->integer('IndexRow');
            $table->integer('IndexColumn');
            $table->integer('NumberOfRows');
            $table->integer('NumberOfColumns');
            $table->longText('DisplayProperties')->nullable()->default(null);
            $table->string('BackgroundColor', 50)->nullable()->default(null);
            $table->string('TextColor', 50)->nullable()->default(null);
            $table->string('FontString', 50)->nullable()->default(null);
            $table->longText('ImageUrl')->nullable()->default(null);
            $table->char('FontSize', 10)->nullable()->default(null);


            $table->foreign('MenuID', 'FK_ItemDisplayInfo_Menu')
                ->references('ID')->on('menu')
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
       Schema::dropIfExists('itemdisplayinfo');
     }
}
