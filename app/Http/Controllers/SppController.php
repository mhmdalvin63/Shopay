<?php

namespace App\Http\Controllers;

use App\Models\spp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
// use App\Http\Controllers\SppController;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = spp::all();
        return view('spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spp = spp::all();
        return view('spp.create', compact('spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        spp::create($request->all());
        return redirect('spp')->with('success','Data spp Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $spp = spp::find($id);
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $spp = spp::find($id);
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $spp = spp::findorfail($id);
        $spp->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect('spp')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $spp = spp::find($id);
        $spp->delete();
        return redirect('spp')->with('success', 'Data deleted successfully');
    }
}
