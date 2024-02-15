@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $user->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $user->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Login:</strong>
                            {{ $user->login }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $user->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Temporal:</strong>
                            {{ $user->codigo_temporal }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
