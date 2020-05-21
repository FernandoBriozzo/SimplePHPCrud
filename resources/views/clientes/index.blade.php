@extends('layouts.master')

@section('title')
Listado de Clientes
@endsection

@section('content')
<h2>Listado de clientes</h2>
<ul>
@foreach($clientes as $cliente)
<li>{{$cliente->nombre}} {{$cliente->apellido}}</li>
@endforeach
</ul>
@endsection
