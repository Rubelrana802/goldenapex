<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->integer('supplier_id');
            $table->string('chalan_no');
            $table->string('deposit_no');
            $table->float('amount');
            $table->string('description');
            $table->string('payment_type');
            $table->string('cheque_no');
            $table->string('date');
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
        Schema::dropIfExists('supplier_ledgers');
    }
}
