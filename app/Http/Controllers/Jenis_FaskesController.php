<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Faskes;
use Illuminate\Http\Request;

class Jenis_FaskesController extends Controller
{
    public function index()
    {
        $jenis_faskes = Jenis_Faskes::all();

        return view('dashboard.jenis_faskes.index', compact('jenis_faskes'));
    }

    public function create()
    {
        return view('dashboard.jenis_faskes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required'
        ]);

        if (isset($request->id)) {
            # update
            $jenis_faskes = Jenis_Faskes::find($request->id);
            $jenis_faskes->update($data);
        } else {
            Jenis_Faskes::create($data);
        }

        return redirect()->route('jenis_faskes.index');
    }

    public function delete(string $id)
    {
        $jenis_faskes = Jenis_Faskes::find($id);
        $jenis_faskes->delete();

        return redirect()->route('jenis_faskes.index');
    }

    public function edit(string $id)
    {
        $jenis_faskes = Jenis_Faskes::find($id);
        if (!$jenis_faskes) {
            return redirect()->back();
        }
        
        return view('dashboard.jenis_faskes.edit', compact('jenis_faskes'));
    }
}
