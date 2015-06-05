@extends('Template')

@section('titulo')

    Crear Nuevo Departamento
    @stop
        @section('contenido')
            {!!Form::open(array('url' =>'/departamentos'))!!}
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Digite Nombre departamento</label>
                {!!Form::text('name',null)!!}
            </div>

            <div>
                {!!Form::submit('Guardar')!!}
            </div>

            {!!Form::close() !!}
            @endsection

@stop