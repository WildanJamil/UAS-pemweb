<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('dashboard.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('dashboard.kategori.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required'
        ]);

        if (isset($request->id)) {
            # update
            $kategori = Kategori::find($request->id);
            $kategori->update($data);
        } else {
            Kategori::create($data);
        }

        return redirect()->route('kategori.index');
    }

    public function delete(string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('kategori.index');
    }

    public function edit(string $id)
    {
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return redirect()->back();
        }
        return view('dashboard.kategori.edit', compact('kategori'));
    }
}
