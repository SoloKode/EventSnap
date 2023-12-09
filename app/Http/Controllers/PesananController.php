<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pesanan'] = new \App\Models\Pesanan();
        $data['route'] = 'pesanan.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Pesan Fotographer';
        $data['paket'] = [
            'A' => 'Paket A',
            'B' => 'Paket B',
            'C' => 'Paket C',
        ];
        return view('pesanan_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'name' =>'required',
            'paket' =>'required',
            'nomor_hp' =>'required',
            'alamat_pemotretan' =>'required',
            'waktu_pemotretan' =>'required',
        ]);
        $pesanan = new \App\Models\Pesanan();
        $pesanan->fill($validasiData);
        $pesanan->save();

        flash('Data berhasil disimpan')->success();
        return back();
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
