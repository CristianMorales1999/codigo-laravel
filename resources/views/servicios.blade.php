@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>

    <ul>
        @foreach($servicios as $item)
            <li>{{$item['titulo']}}</li>
        @endforeach
    </ul>
@endsection