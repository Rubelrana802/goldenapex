<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_adds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_name');
            $table->string('ac_name');
            $table->string('ac_number');
            $table->string('branch');
            $table->string('address')->nullable();
            $table->float('opening_balance')->nullable();
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
        Schema::dropIfExists('bank_adds');
    }
}
