<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    public function index()
    {
        $kabkota = Kabkota::with('provinsi')->get();
        return view('dashboard.kabkota.index', compact('kabkota'));
    }

    public function create()
    {
        $provinsi = Provinsi::all();
        return view('dashboard.kabkota.create', compact('provinsi'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required',
            "latitude" => 'required|numeric',
            "longitude" => 'required|numeric',
            "provinsi_id" => 'required|exists:provinsi,id'
        ]);

        if (!empty($request->id)) {
            # update
            $kabkota = Kabkota::find($request->id);
            if (!$kabkota) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }
            $kabkota->update($data);
        } else {
            Kabkota::create($data);
        }

        return redirect()->route('kabkota.index')->with('success', 'Data berhasil disimpan.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:kabkotas,id'
        ]);

        $kabkota = Kabkota::find($request->id);
        if (!$kabkota) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $kabkota->delete();
        return redirect()->route('kabkota.index')->with('success', 'Data berhasil dihapus.');
    }

    public function edit(Request $request)
    {
        // $request->validate([
        //     'id' => 'required|exists:kabkotas,id'
        // ]);

        $kabkota = Kabkota::find($request->id);
        $provinsi = Provinsi::all();

        if (!$kabkota) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        return view('dashboard.kabkota.edit', compact('kabkota', 'provinsi'));
    }
}
