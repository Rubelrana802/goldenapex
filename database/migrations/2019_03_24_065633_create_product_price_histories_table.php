<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPriceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_price_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('supplier_id');
            $table->double('supplier_price');
            $table->string('date_of_price_buy');
            $table->string('affect_time_pc');
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
        Schema::dropIfExists('product_price_histories');
    }
}
