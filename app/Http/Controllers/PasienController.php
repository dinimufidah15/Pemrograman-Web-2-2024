<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = pasien::all();
        return view('admin.pasien', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|integer',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'gender' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|string',
        ]);

        pasien::create($validated);
        return redirect('admin/pasien')->with('pesan', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = pasien::find($id);
        return view('admin.detail_pasien', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = pasien::find($id);
        return view ('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required|integer',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $pasien = pasien::find($id);
        $pasien->update($validated);
        return redirect('admin/pasien')->with('pesan', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();
        return redirect('admin/pasien')->with('pesan', 'data berhasil di hapus');
    }
}
