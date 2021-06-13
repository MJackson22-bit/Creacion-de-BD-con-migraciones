<!DOCTYPE html>
@extends('index')
@section('contenido')
<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 align="center" class="alert-heading">{{$message}}</h4>
    </div>
    @if ($type == "aula")
    <a href="/Aula/list" align="center" class="btn btn-primary">Ir Atrás</a>
    @endif
</div>
@endsection