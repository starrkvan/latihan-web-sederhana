<?php

namespace App\Http\Controllers\Siswadata;

use App\Models\Siswadata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as RoutingController;

class SiswadataController extends RoutingController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $data = Siswadata::where('nama', 'like', '%' . request('search') . '%')->get();
        } else {
            $data = Siswadata::orderBy('nama', 'asc')->get();
        }
        return view('home', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'ttl' => 'required|min:3',
            'sekolah' => 'required|min:3',
            'keterangan' => 'required|min:3',
        ], [
            'nama.required' => 'Kolom nama wajib di isi',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'sekolah' => $request->input('sekolah'),
            'keterangan' => $request->input('keterangan'),
        ];

        Siswadata::create($data);
        return redirect()->route('home')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswadata::findOrFail($id);
        return view('edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'ttl' => 'required|date',
            'sekolah' => 'required|min:3',
            'keterangan' => 'required|in:Lulus,Gagal',
        ], [
            'nama.required' => 'Kolom nama wajib di isi',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'sekolah' => $request->input('sekolah'),
            'keterangan' => $request->input('keterangan'),
        ];

        Siswadata::where('id', $id)->update($data);
        return redirect()->route('home')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswadata::where('id', $id)->delete();
        return redirect()->route('home')->with('success', ' Berhasil menghapus data');
    }
}
