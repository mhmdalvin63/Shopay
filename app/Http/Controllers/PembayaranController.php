<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Models\Kelas;
use App\Models\siswa;
use App\Models\petugas;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
// use App\Http\Controllers\PembayaranController;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_siswa()
    {
        $Pembayaran = Siswa::all();
        return view('Pembayaran.index', compact('Pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $Pembayaran = Pembayaran::with('kelas','spp')->paginate();
        $Pembayaran = Pembayaran::all();
        $Siswa = siswa::all();
        $Petugas = petugas::all();
        return view('Pembayaran.create', compact('Pembayaran', 'Siswa', 'Petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembayaran::create($request->all());
        return redirect()->route('history_index')->with('success','Data siswa Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show_siswa($id)
    {
        $Pembayaran = Siswa::find($id);
        return view('Pembayaran.show', compact('Pembayaran'));
    }
    public function show_history()
    {
        $Pembayaran = Pembayaran::first()->get();
        return view('History.index', compact('Pembayaran'));
    }
    // public function show_pembayaran()
    // {
    //     $Pembayaran = Pembayaran::all();
    //     return view('History.show', compact('Pembayaran'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Siswa = siswa::all();
        $Petugas = petugas::all();
        $Pembayaran = Pembayaran::findorfail($id);
        return view('Pembayaran.edit', compact('Pembayaran', 'Siswa', 'Petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Pembayaran = Pembayaran::findorfail($id);
        $Pembayaran->update([
            'id_petugas' => $request->id_petugas,
            'id_siswa' => $request->id_siswa,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_bayar' => $request->bulan_bayar,
            'tahun_bayar' => $request->tahun_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect()->route('pembayaran_index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Pembayaran = Pembayaran::find($id);
        $Pembayaran->delete();
        return redirect()->route('pembayaran_index')->with('success', 'Data deleted successfully');
    }
}
