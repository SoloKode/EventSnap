<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pesanan'] = \App\Models\Pesanan::where('id_user', Auth::id())->get();
        $data['judul'] = 'Data Pesanan Baru';
        return view('pesanan_index', $data);
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
        $data['pesanan'] = \App\Models\Pesanan::findOrFail($id);
        $data['route'] = ['pesanan.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Pesanan';
        $data['paket'] = [
            'A' => 'Paket A',
            'B' => 'Paket B',
            'C' => 'Paket C',
        ];
        return view('pesanan_create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate(
            [
                'name' => 'required',
                'paket' => 'required',
                'nomor_hp' => 'required',
                'alamat_pemotretan' => 'required',
                'waktu_pemotretan' => 'required',
            ]
        );
        $dokter = \App\Models\Pesanan::findOrFail($id);
        $dokter->fill($validasiData);
        $dokter->save();
        flash('Data berhasil disimpan')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
