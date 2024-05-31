@extends('layouts.app')

@section('template_title')
    {{ $tblPortafolio->name ?? __('Show') . " " . __('Tbl Portafolio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tbl Portafolio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tbl-portafolios.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $tblPortafolio->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Subtitulo:</strong>
                            {{ $tblPortafolio->subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $tblPortafolio->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tblPortafolio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $tblPortafolio->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $tblPortafolio->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $tblPortafolio->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
