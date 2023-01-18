@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $cliente->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sigla:</strong>
                            {{ $cliente->sigla }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Comuna:</strong>
                            {{ $cliente->comuna }}
                        </div>
                        <div class="form-group">
                            <strong>Cuidad:</strong>
                            {{ $cliente->cuidad }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $cliente->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
