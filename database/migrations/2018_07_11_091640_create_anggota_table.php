<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nama');
            $table->string('identitas')->unique();
            $table->integer('kelurahan_id')->unsigned()->nullable();
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onUpdate('cascade')->onDelete('set null');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->string('alamat_lengkap');
            $table->string('jenkel');
            $table->string('pekerjaan');
            $table->string('telp');
            $table->string('foto')->nullable();
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
        //
    }
}
