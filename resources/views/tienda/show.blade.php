@extends('layouts.app')

@section('template_title')
    {{ $tienda->name ?? "{{ __('Show') Tienda" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tienda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiendas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tienda->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tienda->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tienda->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $tienda->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $tienda->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Anexo:</strong>
                            {{ $tienda->direccion_anexo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Barrio:</strong>
                            {{ $tienda->direccion_barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            {{ $tienda->calificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion Cantidad:</strong>
                            {{ $tienda->calificacion_cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Impuestos:</strong>
                            {{ $tienda->impuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Trabajados:</strong>
                            {{ $tienda->dias_trabajados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
