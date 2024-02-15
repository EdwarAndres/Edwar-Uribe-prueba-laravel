<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $tienda->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tienda->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tienda->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $tienda->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $tienda->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_anexo') }}
            {{ Form::text('direccion_anexo', $tienda->direccion_anexo, ['class' => 'form-control' . ($errors->has('direccion_anexo') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Anexo']) }}
            {!! $errors->first('direccion_anexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_barrio') }}
            {{ Form::text('direccion_barrio', $tienda->direccion_barrio, ['class' => 'form-control' . ($errors->has('direccion_barrio') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Barrio']) }}
            {!! $errors->first('direccion_barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificacion') }}
            {{ Form::text('calificacion', $tienda->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion']) }}
            {!! $errors->first('calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificacion_cantidad') }}
            {{ Form::text('calificacion_cantidad', $tienda->calificacion_cantidad, ['class' => 'form-control' . ($errors->has('calificacion_cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion Cantidad']) }}
            {!! $errors->first('calificacion_cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuestos') }}
            {{ Form::text('impuestos', $tienda->impuestos, ['class' => 'form-control' . ($errors->has('impuestos') ? ' is-invalid' : ''), 'placeholder' => 'Impuestos']) }}
            {!! $errors->first('impuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dias_trabajados') }}
            {{ Form::text('dias_trabajados', $tienda->dias_trabajados, ['class' => 'form-control' . ($errors->has('dias_trabajados') ? ' is-invalid' : ''), 'placeholder' => 'Dias Trabajados']) }}
            {!! $errors->first('dias_trabajados', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>