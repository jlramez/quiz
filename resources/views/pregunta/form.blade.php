<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contenido') }}
            {{ Form::text('contenido', $pregunta->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       <!-- <div class="form-group">
            {{ Form::label('secciones_id') }}
            {{ Form::text('secciones_id', $pregunta->secciones_id, ['class' => 'form-control' . ($errors->has('secciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Secciones Id']) }}
            {!! $errors->first('secciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->
        <div class="form-group ">
                            <label for="secciones" ></label>
                                  <select name="secciones_id" id="secciones_id" class="form-control">
                                     <option>--Seleccione la sección--</option>  
                                     @foreach ($secciones as $row) 
                                      <option  value="{{ $row->id }}">{{ $row->descripcion }}</option>
                                     @endforeach
                                </select> 
                                {!! $errors->first('secciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group ">
                            <label for="tipo" ></label>
                                  <select name="tipos_id" id="tipos_id" class="form-control">
                                     <option>--Seleccione el tipo de respuesta-</option>  
                                     @foreach ($tipos as $row) 
                                      <option  value="{{ $row->id }}">{{ $row->descripcion }}</option>
                                     @endforeach
                                </select> 
                                {!! $errors->first('secciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt80">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>