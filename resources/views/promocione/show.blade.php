@extends('layouts.app')

@section('template_title')
    {{ $promocione->name ?? "{{ __('Show') Promocione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Promocione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promociones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $promocione->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $promocione->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $promocione->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $promocione->porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Semana:</strong>
                            {{ $promocione->dias_semana }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
