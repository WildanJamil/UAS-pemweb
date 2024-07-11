<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('dashboard.provinsi.index', compact('provinsi'));
    }

    public function create()
    {
        return view('dashboard.provinsi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required',
            "ibukota" => 'required',
            "latitude" => 'required|numeric',
            "longitude" => 'required|numeric'
        ]);

        if (isset($request->id)) {
            # update
            $provinsi = Provinsi::find($request->id);
            $provinsi->update($data);
        } else {
            Provinsi::create($data);
        }

        return redirect()->route('provinsi.index');
    }

    public function delete(string $id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        return redirect()->route('provinsi.index');
    }

    public function edit(string $id)
    {
        $provinsi = Provinsi::find($id);
        if (!$provinsi) {
            return redirect()->back();
        }
        return view('dashboard.provinsi.edit', compact('provinsi'));
    }
}