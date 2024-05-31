@extends('layouts.app')

@section('template_title')
    {{ $tblServicio->name ?? __('Show') . " " . __('Tbl Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tbl Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tbl-servicios.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $tblServicio->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $tblServicio->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tblServicio->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
