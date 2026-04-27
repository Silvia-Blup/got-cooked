<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mata_kuliah.index', [
            'mata_kuliah' => MataKuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata_kuliah.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        MataKuliah::create($data);

        return redirect()->action([MataKuliahController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return MataKuliah::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $data = MataKuliah::find($id);
        return view('mata_kuliah.edit', [
            'mk' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', 'id', '_method');

        MataKuliah::find($id)->update($data);

        return redirect()->action([MataKuliahController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
         MataKuliah::find($id)->delete();

         return redirect()->action([MataKuliahController::class, 'index']);
    }
}
