@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tblentrada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tblentrada</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tblentradas.update', $tblentrada->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tblentrada.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
