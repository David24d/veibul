@extends('layouts.app')

@section('template_title')
    Tbl Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tbl Servicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tbl-servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Servicio') }}
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
                                        
										<th>Icono</th>
										<th>Titulo</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                

                                    @foreach ($tblServicios as $tblServicio)
                                    
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblServicio->icono }}</td>
											<td>{{ $tblServicio->titulo }}</td>
											<td>{{ $tblServicio->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('tbl-servicios.destroy',$tblServicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tbl-servicios.show',$tblServicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbl-servicios.edit',$tblServicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblServicios->links() !!}
            </div>
        </div>
    </div>
@endsection
