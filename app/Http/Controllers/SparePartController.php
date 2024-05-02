<?php

namespace App\Http\Controllers;

use App\Models\JenisSparepart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SparePart;
use Illuminate\Support\Facades\Storage;

class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spareParts = SparePart::latest()->search()->get();
        return view('dashboard.product', compact('spareParts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_part' => ['required', 'min:5', 'max:255'],
            'harga' => ['required', 'min:4', 'numeric'],
            'stok' => ['required', 'min:1', 'numeric'],
            'jenis' => ['required'],
            'image' => ['image', 'file', 'max:2048'],
            'deskripsi_product' => ['required', 'min:5'],
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-image');
        }

        SparePart::create($validatedData);

        return redirect('/dashboard/product')->with('success', 'Data berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spareParts = SparePart::find($id);
        $jenis = DB::table('tbl_jenis_sparepart')->get();  

        return view('dashboard.product.edit', [
            'spareParts' => $spareParts,
            'jenis' => $jenis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_part' => ['required', 'min:5', 'max:255'],
            'harga' => ['required', 'min:4', 'numeric'],
            'stok' => ['required', 'min:1', 'numeric'],
            'jenis' => ['required'],    
            'image' => ['image', 'file', 'max:2048'],
            'deskripsi_product' => ['required', 'min:5'],
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-image');
        }
        SparePart::where('id', $id)->update($validatedData);

        return redirect('/dashboard/product')->with('success', 'Data Product berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spareParts = SparePart::findOrFail($id);

        $spareParts->delete();

        return redirect('/dashboard/product')->with('success', 'Data Berhasil Dihapus!');
    }

    public function jenis()
    {
        $jenis = DB::table('tbl_jenis_sparepart')->get();  

        return view('dashboard.product.create', compact('jenis'));
    }
}
