@extends('layouts.app')

@section('template_title')
    {{ $seccione->name ?? 'Show Seccione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Seccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('secciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $seccione->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $seccione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cuestionarios Id:</strong>
                            {{ $seccione->cuestionarios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
