<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Petugas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home", [
            "title" => "Perpustakaan",
            "allBuku" => Buku::all()
        ]);
    }

    public function login() {
        return view("login",[
            "title" => "Login - Perpustakaan",
            "allAnggota" => Anggota::all(),
            "allPetugas" => Petugas::all()
        ]);
    }
}
