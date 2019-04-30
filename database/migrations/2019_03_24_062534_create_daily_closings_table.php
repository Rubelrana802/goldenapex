<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyClosingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_closings', function (Blueprint $table) {
            $table->increments('id');
            $table->float('last_day_closing');
            $table->float('cash_in');
            $table->float('cash_out');
            $table->string('date');
            $table->float('amount');
            $table->float('adjustment');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('daily_closings');
    }
}
