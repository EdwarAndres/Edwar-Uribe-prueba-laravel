@extends('layouts.app')

@section('template_title')
    {{ $tiendasPromocione->name ?? "{{ __('Show') Tiendas Promocione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tiendas Promocione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiendas-promociones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tiendasPromocione->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $tiendasPromocione->inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fin:</strong>
                            {{ $tiendasPromocione->fin }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $tiendasPromocione->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Id Promocion:</strong>
                            {{ $tiendasPromocione->id_promocion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
