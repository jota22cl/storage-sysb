<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Monedas')

@section('content')
<h4>Monedas</h4>

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="table-responsive text-nowrap">
              <a href="{{ route('pages-monedas-create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nueva moneda</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>Moneda</th>
                    <th>Simbolo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($monedas as $moneda)
                  <tr>
                    <td>{{$moneda->moneda}}</td>
                    <td>{{$moneda->simbolo}}</td>
                    <td>
                      @if ($moneda->vigente)
                          <span class="bg-label-success">Vigente</span>
                      @else
                          <span class="bg-label-danger">No vigente</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('pages-monedas-show',$moneda->id) }}" class="btn btn-success bx bx-edit-alt"></a>
                      <a href="{{ route('pages-monedas-destroy',$moneda->id) }}" class="btn btn-danger bx bx-trash"></a>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
@endsection