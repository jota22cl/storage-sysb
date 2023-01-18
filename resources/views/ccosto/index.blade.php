@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Centro de costos')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Centros de Costos</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('ccostos.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nuevo Centro de Costo</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>C.Costo</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ccostos as $ccosto)
              <tr>
                <td>{{$ccosto->codigo}}</td>
                <td>{{$ccosto->descripcion}}</td>
                <td>
                  @if ($ccosto->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('ccostos.destroy',$ccosto->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('ccostos.edit',$ccosto->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $ccostos->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
