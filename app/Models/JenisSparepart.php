<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_jenis',
        
    ];

    protected $table = 'tbl_jenis_sparepart';
    protected $keyType = 'string';

    // protected $primaryKey = 'id';

    // public function JenisSparepart()
    // {
    //     return $this->getColumnValue('id');
    // }

}
