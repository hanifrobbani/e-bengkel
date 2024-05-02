<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSparepart;

class JenisSparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = JenisSparepart::all();
        return view('dashboard.jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => ['required', 'max:35'],
            'nama_jenis' => ['required', 'max:35'],
        ]);

        JenisSparepart::create($validatedData);

        return redirect('/dashboard/jenis')->with('success', 'Data berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisSparepart $jenis)
    {
        return view('dashboard.jenis.show', compact('jenis'));
    }
        
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis = JenisSparepart::find($id);
        return view('dashboard.jenis.edit', [
            'jenis' => $jenis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => ['required', 'max:35', 'numeric'],
            'nama_jenis' => ['required', 'max:35'],
        ]);

        JenisSparepart::where('id', $id)->update($validatedData);

        return redirect('/dashboard/jenis')->with('success', 'Data Product berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = JenisSparepart::findOrFail($id);

        $jenis->delete();

        return redirect('/dashboard/jenis')->with('success', 'Data Berhasil Dihapus!');
    }

}
