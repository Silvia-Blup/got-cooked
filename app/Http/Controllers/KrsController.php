<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Dosen;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('krs.index', [
            'krs' => KRS::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('krs.create', [
        'mahasiswa' => Mahasiswa::all(),
        'MataKuliah' => MataKuliah::all(),
        'Dosen' => Dosen::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'kode_mahasiswa' => 'required|exists:table_mahasiswa,id',
        'tahun_ajaran'   => 'required|string',
        'semester'       => 'required|in:ganjil,genap',
        'status'         => 'required|in:pending,approved,partial,declined',
        'total_sks'      => 'required|integer|min:0',
        ]);

        KRS::create($validated);

        return redirect()->route('krs.index')->with('success', 'Data KRS berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('krs.show', [
            'krs' => KRS::where('id', '=', $id)->with(['detail', 'mahasiswa',
                'detail.kelas', 'detail.kelas.dosen', 'detail.kelas.matakuliah'])->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KRS $kRS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KRS $kRS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KRS $kRS)
    {
        //
    }
}