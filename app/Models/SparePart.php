<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;
    protected $fillable = [
            'nama_part',
            'harga',
            'stok',
            'jenis',
            'image',
            'deskripsi_product',
        ];
    protected $table = 'spare_part';

    public function scopeSearch($query)
    {
        if (request()->has('search')) {
            return $query->where('nama_part', 'like', '%' . request('search') . '%')
                        ->orWhere('jenis', 'like', '%' . request('search') . '%');
        } else {
            return $query;
        }
    }   
    
}
