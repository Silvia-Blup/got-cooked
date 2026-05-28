<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Kelas.index', [
            'Kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kelas.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Kelas::create($data);

        return redirect()->action([KelasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Kelas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('Kelas.edit', [
            'm' => $Kelas = Kelas::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', 'id', '_method');

        Kelas::find($id)->update($data);

        return redirect()->action([KelasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
         Kelas::find($id)->delete();

         return redirect()->action([KelasController::class, 'index']);
    }
}