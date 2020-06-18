@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<center><h1>Informacion del Taller</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project)}}">
    @csrf @method('PATCH')

    @include('projects._form', ['btnText' => 'Editar'])
    </form>
</center>
@endsection