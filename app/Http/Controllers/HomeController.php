<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Petugas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", [
            "title" => "Perpustakaan",
            "allBuku" => Buku::all()
        ]);
    }

    public function login()
    {
        return view("login", [
            "title" => "Login - Perpustakaan",
            "allAnggota" => Anggota::all(),
            "allPetugas" => Petugas::all()
        ]);

        if (Auth::check()) {
            return redirect('dashboard');
        }
    }

    // public function authenticate(Request $request)
    // {
    //     $request->validate([
    //         "username" => 'required',
    //         "password" => 'required'
    //     ]);
    // }

    public function dashboard()
    {
        return view("dashboard");
    }
}