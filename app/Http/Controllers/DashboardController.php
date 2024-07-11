<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faskes;
use App\Models\Jenis_Faskes;
use App\Models\Kabkota;
use App\Models\Kategori;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jenis_faskes = Jenis_Faskes::count();
        $faskes = Faskes::count();
        $kabkota = Kabkota::count();
        $kategori = Kategori::count();
        $provinsi = Provinsi::count();
        return view('dashboard.dashboard', compact('jenis_faskes', 'faskes', 'kabkota', 'kategori', 'provinsi'));
    }
}
