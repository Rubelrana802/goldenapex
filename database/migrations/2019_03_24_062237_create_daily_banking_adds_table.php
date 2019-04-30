<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyBankingAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_banking_adds', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->integer('bank_id');
            $table->string('deposit_type');
            $table->string('transaction_type');
            $table->text('description');
            $table->float('amount');
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
        Schema::dropIfExists('daily_banking_adds');
    }
}
