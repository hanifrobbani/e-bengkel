<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_barang',
        'jenis_transaksi',
        'nama_pelanggan',
        'alamat',
        'no_telp',
        'harga_barang',
        'jumlah_barang',
        'total_payment',
        'uang_tunai',
        'kembalian',
        'catatan',

    ];
protected $table = 'transaksis';

    public function sparePart()
    {
        return $this->belongsTo(SparePart::class, 'spare_part_id');
    }
}
