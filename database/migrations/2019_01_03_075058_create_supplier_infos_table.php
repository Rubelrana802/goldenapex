<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_id',100)->unique();
            $table->string('supplier_name');
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('details')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('supplier_infos');
    }
}
