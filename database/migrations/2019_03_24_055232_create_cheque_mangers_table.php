<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequeMangersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque_mangers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transection_id');
            $table->integer('customer_id');
            $table->integer('bank_id');
            $table->string('cheque_no');
            $table->string('date');
            $table->string('transection_type');
            $table->integer('cheque_status');
            $table->float('ammount');
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
        Schema::dropIfExists('cheque_mangers');
    }
}
