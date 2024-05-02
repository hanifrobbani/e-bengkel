<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSparepart;
class printController extends Controller
{
    public function print(){

        $jenis = JenisSparepart::latest()->get();
        // ddd($jenis);
        return view('dashboard.jenis.show', compact('jenis'));
    }
}
