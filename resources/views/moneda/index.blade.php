@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Monedas')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<h4>Monedas</h4>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      
      <div class="card-body">
        <a href="{{ route('monedas.create') }}" class="btn btn-primary"><span class='bx bx-plus-circle'></span> Añadir nueva Moneda</a>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="thead">
              <tr>
                <th>Moneda</th>
                <th>Simbolo</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($monedas as $moneda)
              <tr>
                <td>{{$moneda->moneda}}</td>
                <td>{{$moneda->simbolo}}</td>
                <td>
                  @if ($moneda->vigente)
                      Vigente
                  @else
                      <span class="bg-label-danger">No vigente</span>
                  @endif
                </td>
            
                <td><form action="{{ route('monedas.destroy',$moneda->id) }}" method="POST">
                  <a class="btn btn-sm btn-success" href="{{ route('monedas.edit',$moneda->id) }}"><i class="bx bx-edit-alt"></i></a>
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
  {!! $monedas->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
</div>
@endsection
