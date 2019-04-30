<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->string('date_of_transection');
            $table->string('transection_type');
            $table->string('transection_category');
            $table->string('transection_mood');
            $table->float('amount');
            $table->float('pay_amount');
            $table->string('description');
            $table->integer('relation_id');
            $table->boolean('is_transaction')->default(true);
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
        Schema::dropIfExists('transections');
    }
}
