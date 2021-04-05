<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomAnggota extends Migration
{
    /**d
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('no_anggota');
            $table->string('nama_anggota')->unique();
            $table->char('jenis_kelamin', 2);
            $table->char('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('hp');
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
        Schema::dropIfExists('anggota');
    }
}
