@extends('layouts.app')

@section('template_title')
    Tiendas Promocione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tiendas Promocione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tiendas-promociones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Estado</th>
										<th>Inicio</th>
										<th>Fin</th>
										<th>Id Tienda</th>
										<th>Id Promocion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiendasPromociones as $tiendasPromocione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tiendasPromocione->estado }}</td>
											<td>{{ $tiendasPromocione->inicio }}</td>
											<td>{{ $tiendasPromocione->fin }}</td>
											<td>{{ $tiendasPromocione->id_tienda }}</td>
											<td>{{ $tiendasPromocione->id_promocion }}</td>

                                            <td>
                                                <form action="{{ route('tiendas-promociones.destroy',$tiendasPromocione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tiendas-promociones.show',$tiendasPromocione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tiendas-promociones.edit',$tiendasPromocione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tiendasPromociones->links() !!}
            </div>
        </div>
    </div>
@endsection
