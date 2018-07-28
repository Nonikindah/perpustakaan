<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_buku', function (Blueprint $table) {
            $table->increments('no_induk');
            $table->integer('buku_id')->unsigned()->nullable();
            $table->foreign('buku_id')->references('kode_buku')->on('buku')->onUpdate('cascade')->onDelete('set null');
            $table->bigInteger('barcode')->nullable();
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
        Schema::dropIfExists('item_buku');
    }
}
