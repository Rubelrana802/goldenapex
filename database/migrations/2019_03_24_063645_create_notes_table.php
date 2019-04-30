<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cash_date');
            $table->string('1000n');
            $table->string('500n');
            $table->string('100n');
            $table->string('50n');
            $table->string('20n');
            $table->string('10n');
            $table->string('5n');
            $table->string('2n');
            $table->string('1n');
            $table->string('grandtotal');
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
        Schema::dropIfExists('notes');
    }
}
