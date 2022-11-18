@extends('layouts.app')

@section('title', 'Ver grupo')

@section('content')
<h1 class="text-center">Ver grupo</h1>

<div class="container">

    <div class="d-flex justify-content-center">

        <x-card title="{{ $group->title }}" content="{{ $group->description }}"   />
           
    </div>
    <div class="d-flex justify-content-center ">
        <script>
            function confirmarEnvio () {
                return (confirm ('¿Estás seguro de borrar el grupo?'));
            }
            </script>
        <form method="post" action="{{ route ('groups.destroy', ['group' => $group] ) }}" onsubmit="confirmarEnvio ()">
            @method('DELETE')
            @csrf
            <div><button type="submit" class="btn btn-danger m-4">Eliminar</button></div>
        </form>

        <div><a href="{{ route('groups.edit', ['group' => $group]) }}" class="btn btn-light m-4">Modificar</a></div>
        <div><a href="{{ route ('groups.index') }}" class="btn btn-success m-4">Volver</a></div>
    </div>
</div>

@endsection