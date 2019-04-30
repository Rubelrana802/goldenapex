<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('invoice_logo');
            $table->string('favicon');
            $table->string('currency');
            $table->string('currency_position');
            $table->string('footer_text');
            $table->string('language');
            $table->string('rtr');
            $table->boolean('captcha')->default(true);
            $table->string('site_key');
            $table->string('secret_key');
            $table->boolean('discount_type')->default(true);
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
        Schema::dropIfExists('web_settings');
    }
}
