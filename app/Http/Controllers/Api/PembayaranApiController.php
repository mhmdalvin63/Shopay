<?php

namespace App\Http\Controllers\Api;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PembayaranResource;
// use App\Http\Controllers\Api\PembayaranFrontController;

class PembayaranFrontController extends Controller
{
    public function index(){
        $Pembayaran = Pembayaran::latest()->get();
            return response()->json([
                'data' => PembayaranResource::collection($Pembayaran),
                'message' => 'Berhasil',
                'success' => true,  
            ]);
            return view("Siswa.UI-Siswa",compact('Pembayaran'));
    }
}
