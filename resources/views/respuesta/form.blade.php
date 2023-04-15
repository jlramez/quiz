<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('preguntas_id') }}
            {{ Form::text('preguntas_id', $respuesta->preguntas_id, ['class' => 'form-control' . ($errors->has('preguntas_id') ? ' is-invalid' : ''), 'placeholder' => 'Preguntas Id']) }}
            {!! $errors->first('preguntas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opciones_id') }}
            {{ Form::text('opciones_id', $respuesta->opciones_id, ['class' => 'form-control' . ($errors->has('opciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Opciones Id']) }}
            {!! $errors->first('opciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>