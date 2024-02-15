@extends('layouts.app')

@section('template_title')
    {{ $usersCliente->name ?? "{{ __('Show') Users Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Users Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users-clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usersCliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usersCliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $usersCliente->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Nacimiento:</strong>
                            {{ $usersCliente->nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $usersCliente->identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Direccion:</strong>
                            {{ $usersCliente->id_direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $usersCliente->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
