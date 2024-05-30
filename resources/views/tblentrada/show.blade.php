@extends('layouts.app')

@section('template_title')
    {{ $tblentrada->name ?? __('Show') . " " . __('Tblentrada') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tblentrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblentradas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $tblentrada->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $tblentrada->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tblentrada->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $tblentrada->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
