<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('kode_buku');
            $table->string('judul');
            $table->string('judul_asli')->nullable();
            $table->string('judul_seri')->nullable();
            $table->integer('rak_id')->unsigned()->nullable();
            $table->foreign('rak_id')->references('id_rak')->on('rak')->onUpdate('cascade')->onDelete('set null');
            $table->integer('penerbit_id')->unsigned()->nullable();
            $table->foreign('penerbit_id')->references('id')->on('penerbit')->onUpdate('cascade')->onDelete('set null');
            $table->integer('subyek_id')->unsigned()->nullable();
            $table->foreign('subyek_id')->references('id_subyek')->on('subyek')->onUpdate('cascade')->onDelete('set null');
            $table->integer('jenisbuku_id')->unsigned()->nullable();
            $table->foreign('jenisbuku_id')->references('id')->on('jenis_buku')->onUpdate('cascade')->onDelete('set null');
            $table->integer('atribut_id')->unsigned()->nullable();
            $table->foreign('atribut_id')->references('id')->on('atribut')->onUpdate('cascade')->onDelete('set null');
            $table->integer('asalbuku_id')->unsigned()->nullable();
            $table->foreign('asalbuku_id')->references('id')->on('asal_buku')->onUpdate('cascade')->onDelete('set null');
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')->onUpdate('cascade')->onDelete('set null');
            $table->string('pengarang1');
            $table->string('pengarang2')->nullable();
            $table->string('pengarang3')->nullable();
            $table->string('penerjemah')->nullable();
            $table->string('ilustrator')->nullable();
            $table->string('kolasi')->nullable();
            $table->string('edisi')->nullable();
            $table->string('kata_kunci');
            $table->string('tahun_terbit');
            $table->string('tahun_entry');
            $table->string('jenis_bacaan');
            $table->string('bahasa');
            $table->string('harga_beli');
            $table->integer('volume');
            $table->string('isbn')->unique();
            $table->integer('halaman');
            $table->integer('cetakan');
            $table->string('kondisi');
            $table->string('abstrak');
            $table->string('gambar');
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
        //Schema::dropIfExists('buku');
    }
}
