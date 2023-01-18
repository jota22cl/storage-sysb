<div class="mb-3">
    {{ Form::label('Codigo Prima de Seguro') }}
    {{ Form::text('codigo', $pseguro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => '0%']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Descripcion') }}
    {{ Form::text('descripcion', $pseguro->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Sin seguro']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Valor') }}
    {{ Form::number('valor', $pseguro->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => '0.00', 'step' => 'any']) }}
    {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($pseguro->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Prima de seguro Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
