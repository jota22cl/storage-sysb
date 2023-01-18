<div class="mb-3">
    {{ Form::label('Sigla') }}
    {{ Form::text('codigo', $ciudade->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'STGO']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Descripción') }}
    {{ Form::text('nombre', $ciudade->nombre, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Santiago']) }}
    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($ciudade->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Ciudad Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>

