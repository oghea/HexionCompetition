<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_order', function(Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('item')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('order')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['order_id','item_id']);
        });
        Schema::table('peserta', function(Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('order')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('pembeli', function(Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('order')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('item', function(Blueprint $table) {
            $table->foreign('jenis_id')->references('id')->on('jenis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
