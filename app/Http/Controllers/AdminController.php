<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user'] = \App\Models\User::all();
        $data['judul'] = 'Data-data User';
        return view('user_index', $data);
    }
    public function pesanan()
    {
        $data['pesanan'] = \App\Models\Pesanan::all();
        $data['judul'] = 'Data Pesanan';
        return view('data_pesanan', $data);
    }
    public function pesananbaru()
    {
        $data['pesanan'] = \App\Models\Pesanan::where('status', 'Belum Selesai')->get();
        $data['judul'] = 'Data Pesanan Baru';
        return view('pesanan_baru', $data);
    }
    public function pesananproses()
    {
        $data['pesanan'] = \App\Models\Pesanan::where('status', 'Diproses')->get();
        $data['judul'] = 'Data Pesanan Diproses';
        return view('pesanan_baru', $data);
    }
    public function pesananselesai()
    {
        $data['pesanan'] = \App\Models\Pesanan::where('status', 'Selesai')->get();
        $data['judul'] = 'Data Pesanan Selesai';
        return view('pesanan_baru', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data['route'] = ['admin.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Pesanan';
        $data['status'] = [
            'Belum Selesai' => 'Belum Selesai',
            'Diproses' => 'Diproses',
            'Selesai' => 'Selesai',
        ];
        return view('pesanan_status', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate(
            [
                'status' => 'required',
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
        $pesanan = \App\Models\Pesanan::findOrFail($id);
        $pesanan->delete();
        flash('Data berhasil dihapus')->success();
        return back();
    }
}
