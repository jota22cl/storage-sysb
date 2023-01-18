@extends('layouts.app')

@section('template_title')
    {{ $gcomun->name ?? 'Show Gcomun' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Gcomun</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('gcomuns.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $gcomun->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gcomun->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $gcomun->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Vigente:</strong>
                            {{ $gcomun->vigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
