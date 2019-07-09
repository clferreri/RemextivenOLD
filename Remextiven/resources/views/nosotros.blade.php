@extends('HederAndFooter')


@section('contenido')

<h1>Este es mi equipo de trabajo</h1>
    
@foreach($equipo as $persona)

<a href="#" class="h4 text-danger">{{$persona}}</a><br/>


@endforeach


@if(!empty($nombre))
    <h1>{{$nombre}}</h1>
@endif

@endsection