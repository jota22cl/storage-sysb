<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $contrato->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $contrato->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ccosto_id') }}
            {{ Form::text('ccosto_id', $contrato->ccosto_id, ['class' => 'form-control' . ($errors->has('ccosto_id') ? ' is-invalid' : ''), 'placeholder' => 'Ccosto Id']) }}
            {!! $errors->first('ccosto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bodega_id') }}
            {{ Form::text('bodega_id', $contrato->bodega_id, ['class' => 'form-control' . ($errors->has('bodega_id') ? ' is-invalid' : ''), 'placeholder' => 'Bodega Id']) }}
            {!! $errors->first('bodega_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaini') }}
            {{ Form::text('fechaini', $contrato->fechaini, ['class' => 'form-control' . ($errors->has('fechaini') ? ' is-invalid' : ''), 'placeholder' => 'Fechaini']) }}
            {!! $errors->first('fechaini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechafin') }}
            {{ Form::text('fechafin', $contrato->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gastocomun') }}
            {{ Form::text('gastocomun', $contrato->gastocomun, ['class' => 'form-control' . ($errors->has('gastocomun') ? ' is-invalid' : ''), 'placeholder' => 'Gastocomun']) }}
            {!! $errors->first('gastocomun', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('administracion') }}
            {{ Form::text('administracion', $contrato->administracion, ['class' => 'form-control' . ($errors->has('administracion') ? ' is-invalid' : ''), 'placeholder' => 'Administracion']) }}
            {!! $errors->first('administracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primaseguro') }}
            {{ Form::text('primaseguro', $contrato->primaseguro, ['class' => 'form-control' . ($errors->has('primaseguro') ? ' is-invalid' : ''), 'placeholder' => 'Primaseguro']) }}
            {!! $errors->first('primaseguro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoseguro') }}
            {{ Form::text('montoseguro', $contrato->montoseguro, ['class' => 'form-control' . ($errors->has('montoseguro') ? ' is-invalid' : ''), 'placeholder' => 'Montoseguro']) }}
            {!! $errors->first('montoseguro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda_id') }}
            {{ Form::text('moneda_id', $contrato->moneda_id, ['class' => 'form-control' . ($errors->has('moneda_id') ? ' is-invalid' : ''), 'placeholder' => 'Moneda Id']) }}
            {!! $errors->first('moneda_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventariable') }}
            {{ Form::text('inventariable', $contrato->inventariable, ['class' => 'form-control' . ($errors->has('inventariable') ? ' is-invalid' : ''), 'placeholder' => 'Inventariable']) }}
            {!! $errors->first('inventariable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vigente') }}
            {{ Form::text('vigente', $contrato->vigente, ['class' => 'form-control' . ($errors->has('vigente') ? ' is-invalid' : ''), 'placeholder' => 'Vigente']) }}
            {!! $errors->first('vigente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>