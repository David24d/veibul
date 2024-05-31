@extends('layouts.app')

@section('template_title')
    {{ $tblequipo->name ?? __('Show') . " " . __('Tblequipo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tblequipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblequipo.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $tblequipo->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecompleto:</strong>
                            {{ $tblequipo->nombrecompleto }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $tblequipo->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Twiter:</strong>
                            {{ $tblequipo->twiter }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $tblequipo->facebook }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
