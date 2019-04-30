<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chalan_no');
            $table->integer('supplier_id');
            $table->float('grand_total_amount');
            $table->float('total_discount');
            $table->string('purchase_date');
            $table->text('purchase_details');
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
        Schema::dropIfExists('product_purchases');
    }
}
