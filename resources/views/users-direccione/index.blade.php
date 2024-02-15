@extends('layouts.app')

@section('template_title')
    Users Direccione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Users Direccione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users-direcciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Distancia</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersDirecciones as $usersDireccione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usersDireccione->nombre }}</td>
											<td>{{ $usersDireccione->direccion }}</td>
											<td>{{ $usersDireccione->distancia }}</td>
											<td>{{ $usersDireccione->id_user }}</td>

                                            <td>
                                                <form action="{{ route('users-direcciones.destroy',$usersDireccione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users-direcciones.show',$usersDireccione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users-direcciones.edit',$usersDireccione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $usersDirecciones->links() !!}
            </div>
        </div>
    </div>
@endsection
