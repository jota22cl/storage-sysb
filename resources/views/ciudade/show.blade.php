@extends('layouts.app')

@section('template_title')
    {{ $ciudade->name ?? 'Show Ciudade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ciudade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ciudades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ciudade->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ciudade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $ciudade->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
