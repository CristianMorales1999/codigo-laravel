@extends('layout')

@section('title','Servicio | '.$servicio->titulo)


@section('content')
<tr>
    <td colspan="4" class="servicios" ><b>SERVICIO {{$servicio->id}}</b></td> <br>
</tr>
<tr>
    <td colspan="4"><b>Nombre:</b>{{$servicio->titulo}}</td>
</tr>
<tr>
    <td colspan="4"><b>Descripción:</b>{{$servicio->descripcion}}</td>
</tr>
<tr>
    <td colspan="4" align="center">{{$servicio->created_at->diffForHumans()}}</td>
</tr>
<tr>
    <td colspan="4" class="servicios">
        <a href="{{route('servicios.create')}}">Nuevo Servicio</a>
    </td>
</tr>
@endsection