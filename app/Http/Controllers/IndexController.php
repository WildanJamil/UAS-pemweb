<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\Kabkota;
use App\Models\Kategori;
use App\Models\Jenis_Faskes;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $faskes = Faskes::all();
        $jenis_faskes = Jenis_Faskes::all();
        $kabkota = Kabkota::all();
        $kategori = Kategori::all();
        return view('index', compact('jenis_faskes', 'kategori', 'kabkota', 'faskes'));
    }
}
