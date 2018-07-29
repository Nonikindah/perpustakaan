<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerbitBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbit_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buku_id')->unsigned()->nullable();
            $table->foreign('buku_id')->references('kode_buku')->on('buku')->onUpdate('cascade')->onDelete('set null');
            $table->integer('penerbit_id')->unsigned()->nullable();
            $table->foreign('penerbit_id')->references('id')->on('penerbit')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('penerbit_buku');
    }
}
