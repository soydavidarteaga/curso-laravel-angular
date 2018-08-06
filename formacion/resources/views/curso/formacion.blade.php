@extends('curso.plantilla')

@section('titulo')
    Registro de participantes
@endsection

@section('contenido')
    <h1>Registro de participantes</h1>
    <h3>Cedula  {{$cedula}} </h3>
    <h3>Nombres  {{$nombres}} </h3>
    <h3>Apellidos  {{$apellidos}} </h3>
    <h3>Movil: {{$movil or "No tiene numero movil"}}</h3>
    <h3>Usuario: {{$usuario}}</h3>

    <h4>
        @if($usuario == 1)
            <p>Hay un solo usuario</p>
                
        @elseif($usuario>1)
            <p>Hay muchos usuarios</p>
        @else
            <p>No hay usuario</p>
        @endif
    </h4>
    <h4>
        @for ($i = 0; $i < 8; $i++)
            <p>El numero es: {{$i}}</p>
        @endfor
    </h4>
@endsection

@section('instituto')
    Instituto Arsistema
@endsection

@section('rif')
    j-01234567-8
@endsection

@section('correo')
    arsistema@gmail.com
@endsection

