@extends('layouts.app')

@section('template_title')
    Pedidos Estado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedidos Estado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos-estados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Pedido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidosEstados as $pedidosEstado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedidosEstado->estado }}</td>
											<td>{{ $pedidosEstado->id_pedido }}</td>

                                            <td>
                                                <form action="{{ route('pedidos-estados.destroy',$pedidosEstado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos-estados.show',$pedidosEstado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos-estados.edit',$pedidosEstado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pedidosEstados->links() !!}
            </div>
        </div>
    </div>
@endsection
