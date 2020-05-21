@extends('layouts.master')
@section('title')
Listado de articulos
@endsection
@section('content')
<h1>aca va el listado de los articulos</h1>
@foreach($articulos as $articulo)
<li>{{$articulo->nombre}} ({{$articulo->codigo}})</li>
@endforeach
@endsection