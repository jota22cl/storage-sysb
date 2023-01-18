@extends('layouts.app')

@section('template_title')
    {{ $comuna->name ?? 'Show Comuna' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comuna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comunas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $comuna->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $comuna->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudades Id:</strong>
                            {{ $comuna->ciudades_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $comuna->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
