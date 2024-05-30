@extends('layouts.app')

@section('template_title')
    Tblequipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tblequipo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblequipo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Diseñador') }}
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
                                        
										<th>Imagen</th>
										<th>Nombrecompleto</th>
										<th>Puesto</th>
										<th>Twiter</th>
										<th>Facebook</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblequipos as $tblequipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblequipo->imagen }}</td>
											<td>{{ $tblequipo->nombrecompleto }}</td>
											<td>{{ $tblequipo->puesto }}</td>
											<td>{{ $tblequipo->twiter }}</td>
											<td>{{ $tblequipo->facebook }}</td>

                                            <td>
                                                <form action="{{ route('tblequipo.destroy',$tblequipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblequipo.show',$tblequipo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblequipo.edit',$tblequipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $tblequipos->links() !!}
            </div>
        </div>
    </div>
@endsection
