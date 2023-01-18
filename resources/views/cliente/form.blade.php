<div class="mb-3">
    {{ Form::label('codigo') }}
    {{ Form::text('codigo', $cliente->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'RUT']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('nombre') }}
    {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre/Razon Social']) }}
    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('sigla') }}
    {{ Form::text('sigla', $cliente->sigla, ['class' => 'form-control' . ($errors->has('sigla') ? ' is-invalid' : ''), 'placeholder' => 'Sigla']) }}
    {!! $errors->first('sigla', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('direccion') }}
    {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('comuna') }}
    {{ Form::text('comuna', $cliente->comuna, ['class' => 'form-control' . ($errors->has('comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna']) }}
    {!! $errors->first('comuna', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('cuidad') }}
    {{ Form::text('cuidad', $cliente->cuidad, ['class' => 'form-control' . ($errors->has('cuidad') ? ' is-invalid' : ''), 'placeholder' => 'Cuidad']) }}
    {!! $errors->first('cuidad', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($cliente->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Cliente Vigente</label>
    </div>
</div>
<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
