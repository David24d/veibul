@extends('layouts.app')

@section('template_title')
    Tbl Portafolio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tbl Portafolio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tbl-portafolios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Pagina Web') }}
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
                                        
										<th>Titulo</th>
										<th>Subtitulo</th>
										<th>Imagen</th>
										<th>Descripcion</th>
										<th>Cliente</th>
										<th>Categoria</th>
										<th>Url</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($tblPortafolios as $tblPortafolio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblPortafolio->titulo }}</td>
											<td>{{ $tblPortafolio->subtitulo }}</td>
											<td>{{ $tblPortafolio->imagen }}</td>
											<td>{{ $tblPortafolio->descripcion }}</td>
											<td>{{ $tblPortafolio->cliente }}</td>
											<td>{{ $tblPortafolio->categoria }}</td>
											<td>{{ $tblPortafolio->url }}</td>

                                            <td>
                                                <form action="{{ route('tbl-portafolios.destroy',$tblPortafolio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tbl-portafolios.show',$tblPortafolio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbl-portafolios.edit',$tblPortafolio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('Delete')
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
                {!! $tblPortafolios->links() !!}
            </div>
        </div>
    </div>
@endsection
