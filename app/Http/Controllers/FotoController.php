<?php

namespace App\Http\Controllers;
use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = Foto::all();
        return view('foto.index', compact('fotos'));
    }

    public function create()
    {
        return view('foto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:2048',
        ]);

        $path = $request->file('foto')->store('uploads/foto', 'public');

        Foto::create([
            'namafile' => $request->file('foto')->getClientOriginalName(),
        ]);

        return redirect()->route('foto.index');
    }
}
