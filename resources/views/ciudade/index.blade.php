@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Ciudades')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Ciudades</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('ciudades.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nueva Ciudad</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ciudades as $ciudade)
              <tr>
                <td>{{$ciudade->codigo}}</td>
                <td>{{$ciudade->nombre}}</td>
                <td>
                  @if ($ciudade->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('ciudades.destroy',$ciudade->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('ciudades.edit',$ciudade->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $ciudades->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
