@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Instrucciones:</strong>
                            {{ $pedido->instrucciones }}
                        </div>
                        <div class="form-group">
                            <strong>Entrega Fecha:</strong>
                            {{ $pedido->entrega_fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Productos:</strong>
                            {{ $pedido->valor_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Envio:</strong>
                            {{ $pedido->valor_envio }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Descuento:</strong>
                            {{ $pedido->valor_descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Cupon:</strong>
                            {{ $pedido->valor_cupon }}
                        </div>
                        <div class="form-group">
                            <strong>Impuestos:</strong>
                            {{ $pedido->impuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Impuestos:</strong>
                            {{ $pedido->valor_impuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Final:</strong>
                            {{ $pedido->valor_final }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            {{ $pedido->calificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $pedido->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $pedido->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Comision:</strong>
                            {{ $pedido->valor_comision }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $pedido->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
