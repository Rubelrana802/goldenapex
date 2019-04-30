<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->integer('customer_id');
            $table->integer('invoice_no');
            $table->integer('receipt_no');
            $table->float('amount');
            $table->string('description');
            $table->string('payment_type');
            $table->string('cheque_no');
            $table->string('date');
            $table->string('receipt_from');
            $table->string('d_c');
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
        Schema::dropIfExists('customer_ledgers');
    }
}
