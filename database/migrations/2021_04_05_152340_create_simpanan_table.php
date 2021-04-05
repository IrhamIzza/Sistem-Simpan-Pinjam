<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
            $table->increments('id_simpanan');
            $table->date('tgl');
            $table->int('no_anggota');
            $table->int('jenis_kelamin');
            $table->int('jumlah');
            $table->int('id_user');
            $table->date('tgl_insert');
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
        Schema::dropIfExists('simpanan');
    }
}
