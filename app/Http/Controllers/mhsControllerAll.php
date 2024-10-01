<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mhs;
use App\Http\Requests\mhs\StoreRequest;
use App\Http\Requests\mhs\UpdateRequest;

class mhsControllerAll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = mhs::all();
        return view('mhs.index', ['mhs' => $mhs]);
    }

    /**   
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mhs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $mhs = new mhs;
        $nrp_prefix = substr($request->nrp, 0, 4);
        $mhs->nrp = $request->nrp;
        $mhs->nama = $request->nama;
        $mhs->email = $request->email;
        $mhs->jurusan = $nrp_prefix == '5025' ? 'Teknik Informatika' : ($nrp_prefix == '5008' ? 'Teknik Kimia' : ($nrp_prefix == '5030' ? 'Desain Komunikasi Visual' : 'Desain Interior'));
        $mhs->alamat = $request->alamat;
        $mhs->save();
        return redirect('/mhs')->with('alert-success', 'Data Mahasiswa Berhasil Ditambahkan!');
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
        //
        $mhs = mhs::find($id);
        return view('mhs.edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $mhs = mhs::find($id);
        $nrp_prefix = substr($request->nrp, 0, 4);
        $mhs->nrp = $request->nrp;
        $mhs->nama = $request->nama;
        $mhs->email = $request->email;
        $mhs->jurusan = $nrp_prefix == '5025' ? 'Teknik Informatika' : ($nrp_prefix == '5008' ? 'Teknik Kimia' : ($nrp_prefix == '5030' ? 'Desain Komunikasi Visual' : 'Desain Interior'));
        $mhs->alamat = $request->alamat;
        $mhs->save();
        return redirect('/mhs')->with('alert-success', 'Data Mahasiswa Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $mhs = mhs::find($id);
        $mhs->delete();
        return redirect('/mhs')->with('alert-success', 'Data Mahasiswa Berhasil Dihapus!');

    }
}
