@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Monedas')

@section('content')
<div class="wor">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Creación de Moneda</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-monedas-store') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Moneda</label>
                  <input type="text" class="form-control" name="moneda" id="moneda" placeholder="Ej. Peso" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Simbolo</label>
                    <input type="text" class="form-control" name="simbolo" id="simbolo" placeholder="Ej. $" />
                </div>
                <div class="mb-3">

                    <label for="Vigente" class="form-label">Estado Moneda</label>
                    <select id="vigente" name="vigente" class="selectpicker w-100" data-style="btn-default">
                      <option value="1">Vigente</option>
                      <option value="0">No vigente</option>
                    </select>


                    <label class="switch switch-success">
                        <input type="checkbox" class="switch-input" name="vigente" id="vigente" value="1" checked />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="bx bx-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="bx bx-x"></i>
                          </span>
                        </span>
                        <span class="switch-label">Moneda Vigente</span>
                      </label>
                </div>







                <button type="submit" class="btn btn-primary mb-3">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection
