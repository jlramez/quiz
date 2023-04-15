@extends('layouts.app')

@section('template_title')
    {{ $opcione->name ?? 'Show Opcione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Opcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('opciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $opcione->contenido }}
                        </div>
                        <div class="form-group">
                            <strong>Preguntas Id:</strong>
                            {{ $opcione->preguntas_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
