<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $comuna->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $comuna->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudades_id') }}
            {{ Form::text('ciudades_id', $comuna->ciudades_id, ['class' => 'form-control' . ($errors->has('ciudades_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudades Id']) }}
            {!! $errors->first('ciudades_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vigente') }}
            {{ Form::text('vigente', $comuna->vigente, ['class' => 'form-control' . ($errors->has('vigente') ? ' is-invalid' : ''), 'placeholder' => 'Vigente']) }}
            {!! $errors->first('vigente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>