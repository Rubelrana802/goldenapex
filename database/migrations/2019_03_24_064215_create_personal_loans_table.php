<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->integer('person_id');
            $table->float('debit');
            $table->float('credit');
            $table->string('date');
            $table->string('details');
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
        Schema::dropIfExists('personal_loans');
    }
}
