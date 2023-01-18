@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Monedas')

@section('content')
<div class="row">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Ver Moneda</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-monedas-update') }}">
                @csrf
                <input type="hidden" name="moneda_id" value="{{ $moneda->id }}">
                <div class="mb-3">
                  <label class="form-label">Moneda</label>
                  <input type="text" class="form-control" name="moneda" value="{{ $moneda->moneda }}" placeholder="Ej. Peso" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Simbolo</label>
                    <input type="text" class="form-control" name="simbolo" value="{{ $moneda->simbolo }}" placeholder="Ej. $" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado Moneda</label>
                    <select name="vigente" class="form-select" data-style="btn-default">
                      <option value="1" @if ($moneda->vigente === 1) selected @endif>Vigente</option>
                      <option value="0" @if ($moneda->vigente === 0) selected @endif>No vigente</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection
