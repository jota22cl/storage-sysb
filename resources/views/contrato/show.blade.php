@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? 'Show Contrato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $contrato->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $contrato->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ccosto Id:</strong>
                            {{ $contrato->ccosto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega Id:</strong>
                            {{ $contrato->bodega_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaini:</strong>
                            {{ $contrato->fechaini }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $contrato->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Gastocomun:</strong>
                            {{ $contrato->gastocomun }}
                        </div>
                        <div class="form-group">
                            <strong>Administracion:</strong>
                            {{ $contrato->administracion }}
                        </div>
                        <div class="form-group">
                            <strong>Primaseguro:</strong>
                            {{ $contrato->primaseguro }}
                        </div>
                        <div class="form-group">
                            <strong>Montoseguro:</strong>
                            {{ $contrato->montoseguro }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda Id:</strong>
                            {{ $contrato->moneda_id }}
                        </div>
                        <div class="form-group">
                            <strong>Inventariable:</strong>
                            {{ $contrato->inventariable }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $contrato->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
