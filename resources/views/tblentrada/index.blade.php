@extends('layouts.app')

@section('template_title')
    Tblentrada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tblentrada') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblentradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Historia') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblentradas as $tblentrada)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblentrada->fecha }}</td>
											<td>{{ $tblentrada->titulo }}</td>
											<td>{{ $tblentrada->descripcion }}</td>
											<td>{{ $tblentrada->imagen }}</td>

                                            <td>
                                                <form action="{{ route('tblentradas.destroy',$tblentrada->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblentradas.show',$tblentrada->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblentradas.edit',$tblentrada->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblentradas->links() !!}
            </div>
        </div>
    </div>
@endsection
