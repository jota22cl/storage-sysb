<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Centro de costos')

@section('content')
<h4>Centro de costos</h4>

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="table-responsive text-nowrap">
              <a href="{{ route('pages-ccostos-create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nuevo Centro de Costo</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>C.Costo</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($ccostos as $ccosto)
                  <tr>
                    <td>{{$ccosto->codigo}}</td>
                    <td>{{$ccosto->descripcion}}</td>
                    <td>
                      @if ($ccosto->vigente)
                          <span class="bg-label-success">Vigente</span>
                      @else
                          <span class="bg-label-danger">No vigente</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('pages-ccostos-show',$ccosto->id) }}" class="btn btn-success bx bx-edit-alt"></a>
                      <a href="{{ route('pages-ccostos-destroy',$ccosto->id) }}" class="btn btn-danger bx bx-trash"></a>
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