@extends('layouts.master')
@section('title')
Crear nuevo cliente
@endsection
@section('content')
<h1>Crear Cliente</h1>
<form method="POST">
    {{csrf_field()}}
    <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input class="form-control" type="text" id="nombre" name="nombre">
    <label for="apellido">Apellido:</label>
    <input class="form-control" type="text" id="apellido" name="apellido">
    </div>
    <button type="submit" class="btn btn-primary form-control">Crear</button>
    <a href="" class="btn btn-default">Volver</a>
</form>

@endsection