@extends('layouts.app')

@section('template_title')
    {{ $pedidosEstado->name ?? "{{ __('Show') Pedidos Estado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedidos Estado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos-estados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pedidosEstado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $pedidosEstado->id_pedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
