<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_summaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bank_id');
            $table->text('description');
            $table->string('deposite_id');
            $table->string('date');
            $table->string('ac_type');
            $table->float('dr');
            $table->float('cr');
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
        Schema::dropIfExists('bank_summaries');
    }
}
