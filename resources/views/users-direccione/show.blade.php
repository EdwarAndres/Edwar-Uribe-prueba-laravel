@extends('layouts.app')

@section('template_title')
    {{ $usersDireccione->name ?? "{{ __('Show') Users Direccione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Users Direccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users-direcciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usersDireccione->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usersDireccione->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $usersDireccione->distancia }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $usersDireccione->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
