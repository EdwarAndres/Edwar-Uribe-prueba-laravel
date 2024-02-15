@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Instrucciones</th>
										<th>Entrega Fecha</th>
										<th>Valor Productos</th>
										<th>Valor Envio</th>
										<th>Valor Descuento</th>
										<th>Valor Cupon</th>
										<th>Impuestos</th>
										<th>Valor Impuestos</th>
										<th>Valor Final</th>
										<th>Calificacion</th>
										<th>Id Tienda</th>
										<th>Direccion</th>
										<th>Valor Comision</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedido->instrucciones }}</td>
											<td>{{ $pedido->entrega_fecha }}</td>
											<td>{{ $pedido->valor_productos }}</td>
											<td>{{ $pedido->valor_envio }}</td>
											<td>{{ $pedido->valor_descuento }}</td>
											<td>{{ $pedido->valor_cupon }}</td>
											<td>{{ $pedido->impuestos }}</td>
											<td>{{ $pedido->valor_impuestos }}</td>
											<td>{{ $pedido->valor_final }}</td>
											<td>{{ $pedido->calificacion }}</td>
											<td>{{ $pedido->id_tienda }}</td>
											<td>{{ $pedido->direccion }}</td>
											<td>{{ $pedido->valor_comision }}</td>
											<td>{{ $pedido->id_user }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
