<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\KelasController;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Kelas = Kelas::all();
        return view('Kelas.index', compact('Kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Kelas = Kelas::all();
        return view('Kelas.create', compact('Kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kelas::create($request->all());
        return redirect()->route('kelas_index')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Kelas = Kelas::find($id);
        return view('Kelas.show', compact('Kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Kelas = Kelas::find($id);
        return view('Kelas.edit', compact('Kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Kelas = Kelas::findorfail($id);
        $Kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);
        return redirect()->route('kelas_index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Kelas = Kelas::find($id);
        $Kelas->delete();
        return redirect()->route('kelas_index')->with('success', 'Data deleted successfully');
    }
}
