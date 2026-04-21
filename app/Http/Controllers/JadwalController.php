<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alldata = jadwal::orderBy('deadline', 'asc')->get();
        return view('jadwal.index', compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat validasi
        $data_input = $request->validate([
            'deadline' => 'required',
            'mata_kuliah' => 'required|max:255',
            'judul_tugas' => 'required|max:255',
            'tipe_tugas' => 'required|in:mandiri,kelompok',
        ]);

        // simpan data
        jadwal::create([
            'deadline' => $request->deadline,
            'mata_kuliah' => $request->mata_kuliah,
            'judul_tugas' => $request->judul_tugas,
            'tipe_tugas' => $request->tipe_tugas,
        ]);

        // redirect ke index jadwal
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jadwal $jadwal)
    {
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //buat validasi
        $data_input = $request->validate([
            'deadline' => 'required',
            'mata_kuliah' => 'required|max:255',
            'judul_tugas' => 'required|max:255',
            'tipe_tugas' => 'required|in:mandiri,kelompok',
        ]);

        // update data
        $jadwal->update($data_input);

        // redirect ke index jadwal
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal->delete();
        // redirect ke index jadwal
        return redirect()->route('jadwal.index');
    }
}
