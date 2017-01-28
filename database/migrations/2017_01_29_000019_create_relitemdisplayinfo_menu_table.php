<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelitemdisplayinfoMenuTable extends Migration
{
    /**
     * Run the migrations.
     * @table relitemdisplayinfo_menu
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relitemdisplayinfo_menu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ItemDisplayInfoID');
            $table->integer('MenuID');


            $table->foreign('ItemDisplayInfoID', 'relitemdisplayinfo_menu_ItemDisplayInfoID')
                ->references('ID')->on('itemdisplayinfo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('MenuID', 'FK_RelItemDisplayInfo_Menu_Menu')
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
       Schema::dropIfExists('relitemdisplayinfo_menu');
     }
}
