@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Clientes')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @includeif('partials.errors')
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Creación de Clientes</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                    
                    @csrf
                    @include('cliente.form')
                </form>
            </div>
          </div>
    </div>
</div>
@endsection
