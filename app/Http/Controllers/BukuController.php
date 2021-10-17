<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        return view("home", [
            "title" => "Perpustakaan",
            "allBuku" => Buku::all(),
            "allKategori" => Kategori::all()
        ]);
    }
}
