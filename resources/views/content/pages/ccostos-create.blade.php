@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Centro de Costo')

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
              <h5 class="mb-0">Creación de Centro de Costo</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-ccostos-store') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">C.Costo</label>
                  <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ej. ADM" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ej. Administración" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado C.Costo</label>
                    <select id="vigente" name="vigente" class="form-select" data-style="btn-default">
                      <option value="1">Vigente</option>
                      <option value="0">No vigente</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3"><span class='bx bx-save' ></span> Graba</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection
