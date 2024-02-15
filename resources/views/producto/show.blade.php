@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $producto->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Kit:</strong>
                            {{ $producto->kit }}
                        </div>
                        <div class="form-group">
                            <strong>Barcode:</strong>
                            {{ $producto->barcode }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Presentacion:</strong>
                            {{ $producto->presentacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $producto->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $producto->peso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
