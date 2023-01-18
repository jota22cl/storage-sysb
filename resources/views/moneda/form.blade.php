<div class="mb-3">
    {{ Form::label('moneda') }}
    {{ Form::text('moneda', $moneda->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
    {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    {{ Form::label('simbolo') }}
    {{ Form::text('simbolo', $moneda->simbolo, ['class' => 'form-control' . ($errors->has('simbolo') ? ' is-invalid' : ''), 'placeholder' => 'Simbolo']) }}
    {!! $errors->first('simbolo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mb-3">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="vigente" id="vigente" value="1" @if ($moneda->vigente === 1) checked @endif>
        <label class="form-check-label" for="vigente">Moneda Vigente</label>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
