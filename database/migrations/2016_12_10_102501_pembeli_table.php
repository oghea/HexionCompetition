<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->integer('order_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone',20);
            $table->text('address');
            $table->string('zip');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeli');
    }
}
