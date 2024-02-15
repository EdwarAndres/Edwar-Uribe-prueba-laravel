<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('instrucciones') }}
            {{ Form::text('instrucciones', $pedido->instrucciones, ['class' => 'form-control' . ($errors->has('instrucciones') ? ' is-invalid' : ''), 'placeholder' => 'Instrucciones']) }}
            {!! $errors->first('instrucciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrega_fecha') }}
            {{ Form::text('entrega_fecha', $pedido->entrega_fecha, ['class' => 'form-control' . ($errors->has('entrega_fecha') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Fecha']) }}
            {!! $errors->first('entrega_fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_productos') }}
            {{ Form::text('valor_productos', $pedido->valor_productos, ['class' => 'form-control' . ($errors->has('valor_productos') ? ' is-invalid' : ''), 'placeholder' => 'Valor Productos']) }}
            {!! $errors->first('valor_productos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_envio') }}
            {{ Form::text('valor_envio', $pedido->valor_envio, ['class' => 'form-control' . ($errors->has('valor_envio') ? ' is-invalid' : ''), 'placeholder' => 'Valor Envio']) }}
            {!! $errors->first('valor_envio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_descuento') }}
            {{ Form::text('valor_descuento', $pedido->valor_descuento, ['class' => 'form-control' . ($errors->has('valor_descuento') ? ' is-invalid' : ''), 'placeholder' => 'Valor Descuento']) }}
            {!! $errors->first('valor_descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_cupon') }}
            {{ Form::text('valor_cupon', $pedido->valor_cupon, ['class' => 'form-control' . ($errors->has('valor_cupon') ? ' is-invalid' : ''), 'placeholder' => 'Valor Cupon']) }}
            {!! $errors->first('valor_cupon', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuestos') }}
            {{ Form::text('impuestos', $pedido->impuestos, ['class' => 'form-control' . ($errors->has('impuestos') ? ' is-invalid' : ''), 'placeholder' => 'Impuestos']) }}
            {!! $errors->first('impuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_impuestos') }}
            {{ Form::text('valor_impuestos', $pedido->valor_impuestos, ['class' => 'form-control' . ($errors->has('valor_impuestos') ? ' is-invalid' : ''), 'placeholder' => 'Valor Impuestos']) }}
            {!! $errors->first('valor_impuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_final') }}
            {{ Form::text('valor_final', $pedido->valor_final, ['class' => 'form-control' . ($errors->has('valor_final') ? ' is-invalid' : ''), 'placeholder' => 'Valor Final']) }}
            {!! $errors->first('valor_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificacion') }}
            {{ Form::text('calificacion', $pedido->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion']) }}
            {!! $errors->first('calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $pedido->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $pedido->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_comision') }}
            {{ Form::text('valor_comision', $pedido->valor_comision, ['class' => 'form-control' . ($errors->has('valor_comision') ? ' is-invalid' : ''), 'placeholder' => 'Valor Comision']) }}
            {!! $errors->first('valor_comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $pedido->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>