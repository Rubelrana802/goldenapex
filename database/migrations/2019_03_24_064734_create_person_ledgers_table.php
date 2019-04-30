<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->integer('person_id');
            $table->string('date');
            $table->float('debit');
            $table->float('credit');
            $table->text('details');
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
        Schema::dropIfExists('person_ledgers');
    }
}
