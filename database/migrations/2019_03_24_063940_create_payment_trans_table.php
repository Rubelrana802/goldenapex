<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_trans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tracing_id');
            $table->string('payment_type');
            $table->string('date');
            $table->float('amount');
            $table->text('description');
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
        Schema::dropIfExists('payment_trans');
    }
}
