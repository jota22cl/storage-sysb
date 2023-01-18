@extends('layouts.app')

@section('template_title')
    {{ $pseguro->name ?? 'Show Pseguro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pseguro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pseguros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $pseguro->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pseguro->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $pseguro->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $pseguro->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
