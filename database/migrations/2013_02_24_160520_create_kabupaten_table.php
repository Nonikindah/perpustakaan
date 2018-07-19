<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table){
            $table->increments('id')->index();
            $table->integer('provinsi_id')->unsigned()->nullable()->index();
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onUpdate('cascade')->onDeleter('cascade');
            $table->string('no_kab')->index();
            $table->string('nama');
            $table->string('no_prov')->index();
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
