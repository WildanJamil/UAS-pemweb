<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\Jenis_Faskes;
use App\Models\Kabkota;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    public function index()
    {
        $faskes = Faskes::with(['jenisFaskes', 'kabkota', 'kategori'])->get();
        return view('faskes.faskes.index', compact('faskes'));
    }

    public function create()
    {
        $faskes = Faskes::all();
        $jenis_faskes = Jenis_Faskes::all();
        $kabkota = Kabkota::all();
        $kategori = Kategori::all();
        return view('faskes.faskes.create', compact('jenis_faskes', 'kategori', 'kabkota', 'faskes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required',
            "nama_pengelola" => 'required',
            "alamat" => 'required',
            "website" => 'required',
            "email" => 'required|email',
            "kabkota_id" => 'required|exists:kabkota,id', // Aturan validasi yang benar
            "rating" => 'required|numeric',
            "latitude" => 'required|numeric',
            "longitude" => 'required|numeric',
            "jenis_faskes_id" => 'required|exists:jenis_faskes,id',
            "kategori_id" => 'required|exists:kategori,id' // Pastikan nama tabel sesuai dengan database Anda
        ]);

        if (isset($request->id)) {
            $faskes = Faskes::find($request->id);
            if (!$faskes) {
                return redirect()->back()->withErrors(['message' => 'Faskes tidak ditemukan']);
            }
            $faskes->update($data);
        } else {
            Faskes::create($data);
        }

        return redirect()->route('faskes.index');
    }
    public function store2(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required',
            "nama_pengelola" => 'required',
            "alamat" => 'required',
            "website" => 'required',
            "email" => 'required|email',
            "kabkota_id" => 'required|exists:kabkota,id', // Aturan validasi yang benar
            "rating" => 'required|numeric',
            "latitude" => 'required|numeric',
            "longitude" => 'required|numeric',
            "jenis_faskes_id" => 'required|exists:jenis_faskes,id',
            "kategori_id" => 'required|exists:kategori,id' // Pastikan nama tabel sesuai dengan database Anda
        ]);

        if (isset($request->id)) {
            $faskes = Faskes::find($request->id);
            if (!$faskes) {
                return redirect()->back()->withErrors(['message' => 'Faskes tidak ditemukan']);
            }
            $faskes->update($data);
        } else {
            Faskes::create($data);
        }

        return redirect()->route('home');
    }

    public function delete(string $id)
    {
        $faskes = Faskes::find($id);
        if ($faskes) {
            $faskes->delete();
        }
        return redirect()->route('faskes.index');
    }

    public function edit(string $id)
    {
        $faskes = Faskes::find($id);
        $jenis_faskes = Jenis_Faskes::all();
        $kabkota = Kabkota::all();
        $kategori = Kategori::all();
        if (!$faskes) {
            return redirect()->back()->withErrors(['message' => 'Faskes tidak ditemukan']);
        }
        return view('faskes.faskes.edit', compact('faskes', 'kabkota', 'jenis_faskes', 'kategori'));
    }
}
