<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Petugas = petugas::all();
        return view('Petugas.index', compact('Petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Petugas = petugas::all();
        return view('Petugas.create', compact('Petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        petugas::create($request->all());
        return redirect('petugas')->with('success','Data Petugas Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Petugas = petugas::find($id);
        return view('petugas.show', compact('Petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Petugas = petugas::find($id);
        return view('Petugas.edit', compact('Petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Petugas = petugas::findorfail($id);
        $Petugas->update([
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
        ]);
        return redirect('petugas')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Petugas = petugas::find($id);
        $Petugas->delete();
        return redirect('petugas')->with('success', 'Data deleted successfully');
    }
}
