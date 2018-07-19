<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table){
            $table->increments('id')->index();
            $table->integer('kabupaten_id')->unsigned()->nullable()->index();
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_kec')->index();
            $table->string('nama');
            $table->string('no_kab')->index();
            $table->string('no_prov');
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
