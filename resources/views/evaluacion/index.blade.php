@extends('layouts.app')

@section('template_title')
    Cuestionario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Evaluación') }}
                            </span>

                             <!--<div class="float-right">
                                <a href="{{ route('cuestionarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>-->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                        <form method="POST" action="{{ route('evaluaciones.store', $preguntas->id) }}">
                        @csrf
                                                            <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>Pregunta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>{{ $preguntas->contenido}}</td>
                                                    
                                                </tr>
                                            @if($preguntas->tipos_id==2)
                                                @foreach($opciones as $row)
                                                    <tr>
                                                    <td><input type="radio" id="opciones_idu" name="opciones_idu" value="{{$row->id}}">
                                                    <label for="">{{ $row->contenido}}</label></td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    @foreach($opciones as $row)
                                                        <tr>
                                                        <td><input type="checkbox" id="opciones_idm" name="opciones_idm[]" value="{{$row->id}}"
                                                        >
                                                        <label for="">{{ $row->contenido}}</label></td>
                                                        </tr>
                                                    @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                        </div>
                        <div class="card-footer">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               
                            </span>
                             <div class="float-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Siguiente') }}
                                </button>
                        </form>
                              </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
