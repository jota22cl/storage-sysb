@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Prima de Seguros')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Prima de Seguros</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('pseguros.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nueva Prima de seguro</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>Código</th>
                <th>Descripcion</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pseguros as $pseguro)
              <tr>
                <td>{{$pseguro->codigo}}</td>
                <td>{{$pseguro->descripcion}}</td>
                <td>{{$pseguro->valor}}</td>
                <td>
                  @if ($pseguro->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('pseguros.destroy',$pseguro->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('pseguros.edit',$pseguro->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $pseguros->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
