<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger("idtransaksi");
            $table->unsignedBigInteger("idbuku");
            $table->dateTime("tlg_kembali");
            $table->integer("denda");
            $table->primary(["idtransaksi","idbuku"]);
            $table->foreign("idtransaksi")->references("idtransaksi")->on("Peminjaman");
            $table->foreign("idbuku")->references("idbuku")->on("Buku");
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
        Schema::dropIfExists('detail_transaksi');
    }
}
