<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('compra_maxima') }}
            {{ Form::text('compra_maxima', $tiendasProducto->compra_maxima, ['class' => 'form-control' . ($errors->has('compra_maxima') ? ' is-invalid' : ''), 'placeholder' => 'Compra Maxima']) }}
            {!! $errors->first('compra_maxima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $tiendasProducto->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_promocion') }}
            {{ Form::text('id_promocion', $tiendasProducto->id_promocion, ['class' => 'form-control' . ($errors->has('id_promocion') ? ' is-invalid' : ''), 'placeholder' => 'Id Promocion']) }}
            {!! $errors->first('id_promocion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $tiendasProducto->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_producto') }}
            {{ Form::text('id_producto', $tiendasProducto->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>