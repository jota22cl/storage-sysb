@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Prima de seguro')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @includeif('partials.errors')
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Modifica Prima de seguro</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pseguros.update', $pseguro->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('pseguro.form')
                </form>
            </div>
          </div>
    </div>
</div>
@endsection
