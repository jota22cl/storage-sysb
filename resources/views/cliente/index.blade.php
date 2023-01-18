@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Clientes')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Clientes</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nuevo Cliente</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Sigla</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($clientes as $cliente)
              <tr>
                <td>{{$cliente->codigo}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->sigla}}</td>
                <td>
                  @if ($cliente->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $clientes->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
