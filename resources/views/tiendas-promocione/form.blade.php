<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $tiendasPromocione->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio') }}
            {{ Form::text('inicio', $tiendasPromocione->inicio, ['class' => 'form-control' . ($errors->has('inicio') ? ' is-invalid' : ''), 'placeholder' => 'Inicio']) }}
            {!! $errors->first('inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fin') }}
            {{ Form::text('fin', $tiendasPromocione->fin, ['class' => 'form-control' . ($errors->has('fin') ? ' is-invalid' : ''), 'placeholder' => 'Fin']) }}
            {!! $errors->first('fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $tiendasPromocione->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_promocion') }}
            {{ Form::text('id_promocion', $tiendasPromocione->id_promocion, ['class' => 'form-control' . ($errors->has('id_promocion') ? ' is-invalid' : ''), 'placeholder' => 'Id Promocion']) }}
            {!! $errors->first('id_promocion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>