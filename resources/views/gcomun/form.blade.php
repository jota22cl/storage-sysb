<div class="mb-3">
    {{ Form::label('Codigo G.Común') }}
    {{ Form::text('codigo', $gcomun->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => '5%']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Descripción') }}
    {{ Form::text('descripcion', $gcomun->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Valor') }}
    {{ Form::number('valor', $gcomun->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => '0.00', 'step' => 'any']) }}
    {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($gcomun->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Gasto Común Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
