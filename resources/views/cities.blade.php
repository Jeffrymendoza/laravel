@extends('template')

@section('Titulo','Listado de ciudades')
@stop

@section('contenido')

    <table class="table">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE DE LA CIUDAD</th>
            <th>CODIGO DE LA CIUDAD</th>
            <th>OPCIONES</th>

        </tr>
        </thead>
        <tbody>
        @foreach($ciudades as $ciudad)
            <tr>
                <td>{!!$ciudad->id!!}</td>
                <td>{!!$ciudad->name!!}</td>
                <td>{!!$ciudad->county_id!!}</td>
                <td><a href="">editar</a> </td>
            </tr>
        @endforeach

        </tbody>


    </table>


@stop