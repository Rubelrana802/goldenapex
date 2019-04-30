<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('email', 100);
            $table->text('address');
            $table->string('mobile');
            $table->string('website');
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
        Schema::dropIfExists('company_informations');
    }
}
