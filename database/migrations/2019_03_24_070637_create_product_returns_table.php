<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_returns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('invoice_id');
            $table->integer('purchase_id');
            $table->string('date_purchase');
            $table->string('date_return');
            $table->float('byy_qty');
            $table->float('ret_qty');
            $table->integer('customer_id');
            $table->integer('supplier_id');
            $table->float('product_rate');
            $table->float('deduction');
            $table->float('total_deduct');
            $table->float('total_tax');
            $table->float('total_ret_amount');
            $table->float('net_total_amount');
            $table->text('reason');
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
        Schema::dropIfExists('product_returns');
    }
}
