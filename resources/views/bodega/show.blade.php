@extends('layouts.app')

@section('template_title')
    {{ $bodega->name ?? 'Show Bodega' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bodega</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodegas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $bodega->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $bodega->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Ccosto Id:</strong>
                            {{ $bodega->ccosto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Largo:</strong>
                            {{ $bodega->largo }}
                        </div>
                        <div class="form-group">
                            <strong>Ancho:</strong>
                            {{ $bodega->ancho }}
                        </div>
                        <div class="form-group">
                            <strong>Mt2:</strong>
                            {{ $bodega->mt2 }}
                        </div>
                        <div class="form-group">
                            <strong>Bodegacompartida:</strong>
                            {{ $bodega->bodegacompartida }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupada:</strong>
                            {{ $bodega->ocupada }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $bodega->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
