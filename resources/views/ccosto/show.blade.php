@extends('layouts.app')

@section('template_title')
    {{ $ccosto->name ?? 'Show Ccosto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ccosto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ccostos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ccosto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ccosto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $ccosto->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
