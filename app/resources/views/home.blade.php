@extends('layout')

@section('title','Inicio')

@section('content')

<center><h1>¿Quieres ser parte de STAFF?</h1></center>
    @auth
        {{ auth()->user()->name }}
    @endauth
@endsection

    