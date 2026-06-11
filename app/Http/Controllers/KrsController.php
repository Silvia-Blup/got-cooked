<?php

namespace App\HttpControllers;

use App\Models\Krs;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    // 4. Halaman Index
    public function index()
    {
        $KrsData = Krs::all();
        return view('Krs.index', compact('KrsData'));
    }

    // 3. Form Create
    public function create()
    {
        return view('Krs.create');
    }

    // Proses Simpan Data Form Create
    public function store(Request $request)
    {
        $request->validate([
            'kode_mahasiswa' => 'required|numeric',
            'tahun_ajaran' => 'required|string',
            'semester' => 'required|in:ganjil,genap',
            'status' => 'required|in:pending,approved,partial,declined',
            'total_sks' => 'required|numeric',
        ]);

        Krs::create($request->all());

        return redirect()->route('Krs.index')->with('success', 'Data Krs berhasil ditambahkan!');
    }
}