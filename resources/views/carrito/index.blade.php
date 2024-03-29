@extends('layouts.app')

@section('template_title')
    Carrito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carrito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carritos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cantidad</th>
										<th>Id Producto</th>
										<th>Id Tienda</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carritos as $carrito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $carrito->cantidad }}</td>
											<td>{{ $carrito->id_producto }}</td>
											<td>{{ $carrito->id_tienda }}</td>
											<td>{{ $carrito->id_user }}</td>

                                            <td>
                                                <form action="{{ route('carritos.destroy',$carrito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carritos.show',$carrito->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carritos.edit',$carrito->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $carritos->links() !!}
            </div>
        </div>
    </div>
@endsection
