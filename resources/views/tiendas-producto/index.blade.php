@extends('layouts.app')

@section('template_title')
    Tiendas Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tiendas Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tiendas-productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Compra Maxima</th>
										<th>Valor</th>
										<th>Id Promocion</th>
										<th>Id Tienda</th>
										<th>Id Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiendasProductos as $tiendasProducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tiendasProducto->compra_maxima }}</td>
											<td>{{ $tiendasProducto->valor }}</td>
											<td>{{ $tiendasProducto->id_promocion }}</td>
											<td>{{ $tiendasProducto->id_tienda }}</td>
											<td>{{ $tiendasProducto->id_producto }}</td>

                                            <td>
                                                <form action="{{ route('tiendas-productos.destroy',$tiendasProducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tiendas-productos.show',$tiendasProducto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tiendas-productos.edit',$tiendasProducto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tiendasProductos->links() !!}
            </div>
        </div>
    </div>
@endsection
