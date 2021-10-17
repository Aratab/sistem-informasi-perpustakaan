<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Buku', function (Blueprint $table) {
            $table->id("idbuku");
            $table->string("isbn",20);
            $table->string("judul",100);
            $table->unsignedBigInteger("idkategori");
            $table->string("pengarang",100);
            $table->string("penerbit",50);
            $table->string("kota_terbit",50);
            $table->string("editor",50);
            $table->string("file_gambar",20);
            $table->dateTime("tgl_insert")->useCurrent();
            $table->dateTime("tgl_update")->useCurrent()->useCurrentOnUpdate();
            $table->integer("stok");
            $table->integer("stok_tersedia");
            $table->foreign("idkategori")->references("idkategori")->on("Kategori");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Buku');
    }
}
