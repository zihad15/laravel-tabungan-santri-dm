<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nim');
            $table->string('name');
            $table->string('gender');
            $table->string('tempatLahir');
            $table->string('tanggalLahir');
            $table->integer('tahunAjaranMasuk');
            $table->text('address');
            $table->string('namaOrtu');
            $table->string('noTelp');
            $table->integer('saldo');
            $table->string('username');
            $table->integer('pin');
            $table->string('status');
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
        Schema::dropIfExists('user');
    }
}
