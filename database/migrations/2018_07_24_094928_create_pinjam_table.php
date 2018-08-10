<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned()->nullable();
            $table->foreign('item_id')->references('no_induk')->on('item_buku')->onUpdate('cascade')->onDelete('set null');
            $table->integer('anggota_id')->unsigned()->nullable();
            $table->foreign('anggota_id')->references('id_anggota')->on('anggota')->onUpdate('cascade')->onDelete('set null');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->dateTime('tgl_pinjam');
            $table->dateTime('tgl_haruskembali');
            $table->dateTime('tgl_kembali')->nullable();
            $table->boolean('dipinjam')->default(true);
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
        Schema::dropIfExists('pinjam');
    }
}
