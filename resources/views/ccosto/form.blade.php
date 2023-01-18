<div class="mb-3">
    {{ Form::label('C.Costo') }}
    {{ Form::text('codigo', $ccosto->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'ADM']) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('Descripción') }}
    {{ Form::text('descripcion', $ccosto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Administración']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($ccosto->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">C.Costo Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>

