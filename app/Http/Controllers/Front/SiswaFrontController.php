<?php

namespace App\Http\Controllers\Front;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Front\SiswaFrontController;

class SiswaFrontController extends Controller
{
    public function PembayaranUser(){
        $Pembayaran = Pembayaran::first()->get();
        if ($Pembayaran) {
            return view("Siswa.UI-Siswa",compact('Pembayaran'));
        } else{
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        };

        return view("Siswa.UI-Siswa",compact('Pembayaran'));
    }
}
