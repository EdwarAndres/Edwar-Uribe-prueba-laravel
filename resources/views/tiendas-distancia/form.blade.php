<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $tiendasDistancia->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $tiendasDistancia->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desde') }}
            {{ Form::text('desde', $tiendasDistancia->desde, ['class' => 'form-control' . ($errors->has('desde') ? ' is-invalid' : ''), 'placeholder' => 'Desde']) }}
            {!! $errors->first('desde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hasta') }}
            {{ Form::text('hasta', $tiendasDistancia->hasta, ['class' => 'form-control' . ($errors->has('hasta') ? ' is-invalid' : ''), 'placeholder' => 'Hasta']) }}
            {!! $errors->first('hasta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>