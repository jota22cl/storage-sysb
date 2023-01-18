<div class="mb-3">
    {{ Form::label('codigo') }}
    {{ Form::text('codigo', $bodega->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'A103']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('descripcion') }}
    {{ Form::text('descripcion', $bodega->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('C.Costo') }}
    {{ Form::select('ccosto_id', $ccostos, $bodega->ccosto_id, ['class' => 'form-control' . ($errors->has('ccosto_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un C.Costo...']) }}
    {!! $errors->first('ccosto_id', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('largo') }}
    {{ Form::number('largo', $bodega->largo, ['class' => 'form-control' . ($errors->has('largo') ? ' is-invalid' : ''), 'placeholder' => 'Centimetros', 'step' => 'any']) }}
    {!! $errors->first('largo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('ancho') }}
    {{ Form::text('ancho', $bodega->ancho, ['class' => 'form-control' . ($errors->has('ancho') ? ' is-invalid' : ''), 'placeholder' => 'Centimetros', 'step' => 'any']) }}
    {!! $errors->first('ancho', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('mt2') }}
    {{ Form::text('mt2', $bodega->mt2, ['class' => 'form-control' . ($errors->has('mt2') ? ' is-invalid' : ''), 'placeholder' => 'Centimetros', 'step' => 'any']) }}
    {!! $errors->first('mt2', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="bodegacompartida" id="bodegacompartida" value="1" @if ($bodega->bodegacompartida === 1) checked @endif>
        <label class="form-check-label" for="bodegacompartida">Bodega Compartida</label>
    </div>
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="bodegaocupada" id="bodegaocupada" value="1" @if ($bodega->bodegaocupada === 1) checked @endif>
        <label class="form-check-label" for="bodegaocupada">Bodega ocupada</label>
    </div>
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($bodega->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Bodega Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
