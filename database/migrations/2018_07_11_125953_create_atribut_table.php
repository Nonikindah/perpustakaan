<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribut', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('batas_sewa')->nullable();
            $table->bigInteger('harga_sewa')->default (0);
            $table->bigInteger('denda')->default(0);
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
        Schema::dropIfExists('atribut');
    }
}
