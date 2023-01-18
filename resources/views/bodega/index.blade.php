@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Bodegas')

@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success"><p>{{ $message }}</p></div>
@endif
<h4>Bodegas</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('bodegas.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nueva Bodega</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>Bodega</th>
                <th>Descripcion</th>
                <th>C.Costo</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($bodegas as $bodega)
              <tr>
                <td>{{$bodega->codigo}}</td>
                <td>{{$bodega->descripcion}}</td>
                <td>{{$bodega->ccosto->descripcion}}</td>
                <td>
                  @if ($bodega->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('bodegas.destroy',$bodega->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('bodegas.edit',$bodega->id) }}"><i class="bx bx-edit-alt"></i></a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {!! $bodegas->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
