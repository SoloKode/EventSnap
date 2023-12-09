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
                            <td>Waktu Pemotretan</td>
                            <td>Created At</td>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->paket }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td>{{ $item->alamat_pemotretan }}</td>
                                    <td>{{ $item->waktu_pemotretan }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    {{-- <td class="d-flex justify-content-around">
                                        <a href="{{ route('dokter.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                        {!! Form::open([
                                            'route' => ['dokter.destroy', $item->id],
                                            'method' => 'delete',
                                            'onsubmit' => 'return confirm("Yakin mau dihapus?")',
                                        ]) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close()!!}
                                    </td> --}}
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