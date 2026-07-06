<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_kelas'        => 'required|string|max:255',
            'kode_mata_kuliah'  => 'required|integer',
            'kode_dosen'        => 'required|integer',
            'hari'              => 'required|in:senin,selasa,rabu,kamis,jumat',
            'jam'               => 'required|in:08:00 - 09:40,09:50 - 11:30,12:30 - 14:10,17:00 - 18:40,19:00 - 20:40',
            'tahun_ajaran'      => 'required|string',
            'ruang_kelas'       => 'required|string',
            'jumlah_max'        => 'required|integer',
            'jumlah_mahasiswa'  => 'nullable|integer',
            'semester'          => 'required|in:ganjil,genap',
        ]);

        Kelas::create($data);

        return redirect()->route('Kelas.index');
    }

    public function show($id)
    {
        return Kelas::findOrFail($id);
    }

    public function edit($id)
    {
        return view('kelas.edit', [
            'm' => Kelas::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'kode_kelas'        => 'required|string|max:255',
            'kode_mata_kuliah'  => 'required|integer',
            'kode_dosen'        => 'required|integer',
            'hari'              => 'required|in:senin,selasa,rabu,kamis,jumat',
            'jam'               => 'required|in:08:00 - 09:40,09:50 - 11:30,12:30 - 14:10,17:00 - 18:40,19:00 - 20:40',
            'tahun_ajaran'      => 'required|string',
            'ruang_kelas'       => 'required|string',
            'jumlah_max'        => 'required|integer',
            'jumlah_mahasiswa'  => 'nullable|integer',
            'semester'          => 'required|in:ganjil,genap',
        ]);

        Kelas::findOrFail($id)->update($data);

        return redirect()->route('Kelas.index');
    }

    public function destroy($id)
    {
        Kelas::findOrFail($id)->delete();

        return redirect()->route('Kelas.index');
    }
}