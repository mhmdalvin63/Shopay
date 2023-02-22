<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Models\Kelas;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('Siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $siswa = siswa::with('kelas','spp')->paginate();
        $siswa = siswa::all();
        $kelas = Kelas::all();
        $spp = spp::all();
        return view('Siswa.create', compact('siswa', 'kelas', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        siswa::create($request->all());
        return redirect()->route('siswa_index')->with('success','Data siswa Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = siswa::find($id);
        return view('Siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $spp = spp::all();
        $kelas = Kelas::all();
        $siswa = siswa::findorfail($id);
        return view('Siswa.edit', compact('siswa', 'kelas', 'spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $siswa = siswa::findorfail($id);
        $siswa->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect()->route('siswa_index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa_index')->with('success', 'Data deleted successfully');
    }
}
