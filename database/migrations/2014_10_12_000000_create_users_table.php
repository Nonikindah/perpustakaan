<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat_lengkap');
            $table->string('jenkel');
            $table->string('telp');
            $table->integer('kelurahan_id')->unsigned()->nullable();
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onUpdate('cascade')->onDelete('set null');
            $table->integer('hak_akses')->default (2);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
