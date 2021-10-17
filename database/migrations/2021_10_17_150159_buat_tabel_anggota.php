<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anggota', function (Blueprint $table) {
            $table->string("nim",14)->primary();
            $table->string("nama",50);
            $table->string("password",255);
            $table->string("alamat",100);
            $table->string("kota",50);
            $table->string("email",50)->unique();
            $table->string("no_telp",20);
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
        Schema::dropIfExists('Anggota');
    }
}
