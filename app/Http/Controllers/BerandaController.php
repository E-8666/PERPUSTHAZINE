<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use App\Models\Pinjam;
use Auth;

class BerandaController extends Controller
{
    public function index()
    {
        $buku_tersedia = Buku::all()->count();
        $buku_tidak_tersedia = Buku::where('status', 'Tidak Tersedia')->count();
        $buku_dipinjam = Pinjam::where('status', 'Dipinjam')->count();
        $buku_tidak_dipinjam = $buku_tersedia - $buku_dipinjam;
        $jumlah_user = User::where('level', 'user')->count();
        $data = Buku::all();
        $user = Auth::user();
        return view('dashboard', compact('data','user', 'buku_tersedia', 'buku_tidak_tersedia', 'buku_dipinjam', 'buku_tidak_dipinjam', 'jumlah_user'));
    }

    public function detail()
    {
        $pinjam = Pinjam::all();
        return view('/{id}/detail', compact('pinjam'));
    }

    
}
