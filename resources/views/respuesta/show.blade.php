@extends('layouts.app')

@section('template_title')
    {{ $respuesta->name ?? 'Show Respuesta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Respuesta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('respuestas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Preguntas Id:</strong>
                            {{ $respuesta->preguntas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Opciones Id:</strong>
                            {{ $respuesta->opciones_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
