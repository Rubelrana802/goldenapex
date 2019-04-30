<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id');
            $table->integer('product_id');
            $table->float('quantity');
            $table->float('rate');
            $table->float('supplier_rate');
            $table->float('total_price');
            $table->float('discount');
            $table->string('discount_per');
            $table->float('tax');
            $table->float('paid_amount');
            $table->float('due_amount');
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
        Schema::dropIfExists('invoice_details');
    }
}
