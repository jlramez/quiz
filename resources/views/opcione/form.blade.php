<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contenido') }}
            {{ Form::text('contenido', $opcione->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group ">
                            <label for="preguntas" ></label>
                                  <select name="preguntas_id" id="preguntas_id" class="form-control">
                                     <option>--Seleccione la pregunta--</option>  
                                     @foreach ($preguntas as $row) 
                                      <option  value="{{ $row->id }}">{{ $row->contenido }}</option>
                                     @endforeach
                                </select> 
                                {!! $errors->first('preguntas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="form-group">
            {{ Form::label('Valor(a,b,c...') }}
            {{ Form::text('valor', $opcione->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>