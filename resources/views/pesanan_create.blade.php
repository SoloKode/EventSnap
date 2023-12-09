@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class='card'>
                    <div class='card-header'>
                        {{ $judul }}
                    </div>
                    <div class='card-body'>
                        {!! Form::model($pesanan, ['route' => $route, 'method' => $method]) !!}
                        <div class='form-group'>
                            <label for="my-input">Nama</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('name') }}</span>
                        </div>
                        <div class='form-group'>
                            <label for="my-input">Paket</label>
                            {!! Form::select('paket', $paket, null, ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('paket') }}</span>
                        </div>
                        <div class='form-group'>
                            <label for="my-input">Nomor HP</label>
                            {!! Form::text('nomor_hp', null, ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('nomor_hp') }}</span>
                        </div>
                        <div class='form-group'>
                            <label for="my-input">Alamat Pemotretan</label>
                            {!! Form::text('alamat_pemotretan', null, ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('alamat_pemotretan') }}</span>
                        </div>
                        <div class='form-group'>
                            <label for="my-input">Waktu Pemotretan</label>
                            {!! Form::datetimeLocal('waktu_pemotretan', \Carbon\Carbon::now()->format('Y-m-d\TH:i'), ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('waktu_pemotretan') }}</span>
                        </div>
                        
                        <br>
                        {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
