@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Gastos Comunes')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Gastos Comunes</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('gcomuns.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nuevo Gasto Común</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($gcomuns as $gcomun)
              <tr>
                <td>{{$gcomun->codigo}}</td>
                <td>{{$gcomun->descripcion}}</td>
                <td>{{$gcomun->valor}}</td>
                <td>
                  @if ($gcomun->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('gcomuns.destroy',$gcomun->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('gcomuns.edit',$gcomun->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $gcomuns->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
