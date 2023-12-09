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
                            <label for="my-input">Status</label>
                            {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
                            <span class='text-danger'>{{ $errors->first('status') }}</span>
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
