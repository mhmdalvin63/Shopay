<?php

namespace App\Http\Controllers\Api;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PembayaranResource;
// use App\Http\Controllers\Api\PembayaranFrontController;

class PembayaranApiController extends Controller
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
    public function show($id){
        $Pembayaran = Pembayaran::find($id);
        if ($Pembayaran) {
            return response()->json(['Pembayaran'=>$Pembayaran], 200);
            return view("Siswa.UI-Siswa-detail",compact('Pembayaran'));
        } else{
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        };
    }
}
