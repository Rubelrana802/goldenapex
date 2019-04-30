<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSynchronizerSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synchronizer_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hostname');
            $table->string('username');
            $table->string('password');
            $table->string('port');
            $table->string('debug');
            $table->string('project_root');
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
        Schema::dropIfExists('synchronizer_settings');
    }
}
