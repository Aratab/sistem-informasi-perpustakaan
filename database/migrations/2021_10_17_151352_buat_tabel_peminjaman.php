<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peminjaman', function (Blueprint $table) {
            $table->id("idtransaksi");
            $table->string("nim",14);
            $table->dateTime("tgl_pinjam");
            $table->integer("total_denda");
            $table->unsignedBigInteger("idpetugas");
            $table->foreign("nim")->references("nim")->on("anggota");
            $table->foreign("idpetugas")->references("idpetugas")->on("petugas");
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Peminjaman');
    }
}
