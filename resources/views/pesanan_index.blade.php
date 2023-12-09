@extends('layouts.sbadmin2')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    {{-- <a href="{{ route('dokter.create')}}" class="btn btn-primary mb-3">Tambah Dokter</a>
                    <a href="{{ route('dokter.laporan')}}" class="btn btn-primary mb-3">Laporan Dokter</a> --}}
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Paket</td>
                            <td>Nomor HP</td>
                            <td>Alamat Pemotretan</td>
                            <td>Status Pesanan</td>
                            <td>Waktu Pemotretan</td>
                            <td>Aksi</td>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->paket }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td>{{ $item->alamat_pemotretan }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->waktu_pemotretan }}</td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{ route('pesanan.edit', $item->id)}}" class="btn btn-primary col-6">Ubah Data</a>
                                        {!! Form::open([
                                            'route' => ['pesanan.destroy', $item->id],
                                            'method' => 'delete',
                                            'onsubmit' => 'return confirm("Yakin mau dihapus?")',
                                        ]) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger col-12']) !!}
                                        {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection