<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJokisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jokis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('packetId')->nullable(false);
            $table->string('login-akun-via');
            $table->string('email-notelp-akun');
            $table->string('password');
            $table->string('nickname');
            $table->string('req-hero');
            $table->string('keterangan')->nullable();
            $table->string('whatsapp');
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
        Schema::dropIfExists('jokis');
    }
}
