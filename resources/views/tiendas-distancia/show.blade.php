@extends('layouts.app')

@section('template_title')
    {{ $tiendasDistancia->name ?? "{{ __('Show') Tiendas Distancia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tiendas Distancia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiendas-distancias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $tiendasDistancia->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $tiendasDistancia->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Desde:</strong>
                            {{ $tiendasDistancia->desde }}
                        </div>
                        <div class="form-group">
                            <strong>Hasta:</strong>
                            {{ $tiendasDistancia->hasta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
