@extends('layouts.app')

@section('template_title')
    {{ $tiendasProducto->name ?? "{{ __('Show') Tiendas Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tiendas Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiendas-productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Compra Maxima:</strong>
                            {{ $tiendasProducto->compra_maxima }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $tiendasProducto->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Id Promocion:</strong>
                            {{ $tiendasProducto->id_promocion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $tiendasProducto->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $tiendasProducto->id_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
