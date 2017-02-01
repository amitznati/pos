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
        Schema::create('rel_item_display_info_menu', function (Blueprint $table) {
            $table->integer('item_display_info_id')->unsigned();
            $table->integer('menu_id')->unsigned();


            $table->foreign('item_display_info_id', 'relitemdisplayinfo_menu_ItemDisplayInfoID')
                ->references('id')->on('item_display_info')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('menu_id', 'FK_RelItemDisplayInfo_Menu_Menu')
                ->references('id')->on('menus')
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
       Schema::dropIfExists('rel_item_display_info_menu');
     }
}
