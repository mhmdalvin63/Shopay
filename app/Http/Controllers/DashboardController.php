<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\siswa;
use App\Models\petugas;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
        {
            $Petugas = petugas::count();
            $Siswa = siswa::count();
            $Kelas = Kelas::count();
            $Pembayaran = Pembayaran::count();
            return view('dashboard', compact('Petugas','Siswa','Kelas','Pembayaran'));
        }
}
