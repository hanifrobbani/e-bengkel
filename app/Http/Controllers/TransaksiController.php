<?php

namespace App\Http\Controllers;

use App\Models\SparePart;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function product()
    {

        $spareParts = SparePart::all();
        $transaksis = Transaksi::all();

        return view('dashboard.transaction.create', compact('spareParts', 'transaksis'));
    }

    public function index()
    {
        $transaksis = Transaksi::all();

        return view('dashboard.transaksi', compact('transaksis'));
    }

    public function simpanTransaksi(Request $request)
    {

        $validatedData = $request->validate([
            'data_barang' => ['required'],
            'jenis_transaksi' => ['required'],
            'nama_pelanggan' => ['required', 'min:3'],
            'alamat' => ['required', 'min:5'],
            'no_telp' => ['required', 'numeric'],
            'harga_barang' => ['required', 'numeric'],
            'jumlah_barang' => ['required'],
            'total_payment' => ['required'],
            'uang_tunai' => ['required'],
            'kembalian' => ['required'],
            'catatan' => ['required'],
        ]);
        Transaksi::create($validatedData);

        return redirect('/dashboard/transaksi')->with('success', 'Data berhasil di tambah!');
    }

    public function showTransaksi(string $id){

        $transaksis = Transaksi::find($id);
        return view('dashboard.transaction.show', compact('transaksis'));
    }

    public function edit(string $id){
        $transaksis = Transaksi::find($id);
        $spareParts = SparePart::all();
        return view('dashboard.transaction.edit', compact('transaksis', 'spareParts'));
    }

    public function deleteTransaksi(string $id){
        $transaksi = SparePart::findOrFail($id);

        $transaksi->delete();

        return redirect('/dashboard/transaksi')->with('success', 'Data Berhasil Dihapus!');
    }
}
