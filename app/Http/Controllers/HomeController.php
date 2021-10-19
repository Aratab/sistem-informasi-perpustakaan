<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Petugas;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", [
            "title" => "Perpustakaan",
            "allBuku" => Buku::all(),
        ]);
    }

    public function login()
    {
        return view("login", [
            "title" => "Login - Perpustakaan",
            "allAnggota" => Anggota::all(),
            "allPetugas" => Petugas::all(),
        ]);
    }

    public function buku()
    {
        return view("Petugas.buku", [
            "title" => "Daftar Buku",
            "allBuku" => Buku::all(),
        ]);
    }

    public function kategori()
    {
        return view("Petugas.kategori", [
            "title" => "Kategori",
            "allKategori" => Kategori::all(),
        ]);
    }

    public function cust()
    {
        return view("Petugas.cust", [
            "title" => "Data Pelanggan",
            "allAnggota" => Anggota::all(),
        ]);
    }

    public function pinjam()
    {
        return view("Petugas.order", [
            "title" => "Order",
            "allPeminjaman" => Peminjaman::all(),
        ]);
    }

    public function angdash()
    {
        return view("Anggota.angdash", [
            "title" => "Dashboard Anggota",
            "allBuku" => Buku::all(),
        ]);
    }

    public function tambahbuku()
    {
        return view("Petugas.tambahbuku", [
            "title" => "Tambah Buku",
            "kategori" => Kategori::pluck('nama', 'idkategori'),
        ]);
    }

}
