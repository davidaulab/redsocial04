@extends('layouts.app')

@section('title', 'Ver persona')

@section('content')
<h1 class="text-center">Ver persona</h1>

<div class="container">

    <div class="d-flex justify-content-center">

        <x-card title="{{ $person->name }}" content="{{ $person->email }}"  link="{{ route ('posts.filterByUser', $person )}}" linkTxt="Ver posts" />
           
    </div>
    <div class="d-flex justify-content-center ">

            <script>
                function confirmarEnvio () {
                    return (confirm ('¿Estás seguro de borrar la persona?'));
                }
                </script>
            <form method="post" action="{{ route ('people.destroy', ['person' => $person] ) }}" onsubmit="confirmarEnvio ()">
                @method('DELETE')
                @csrf
                <div><button type="submit" class="btn btn-danger m-4">Eliminar</button></div>
            </form>
    
            <div><a href="{{ route('people.edit', ['person' => $person]) }}" class="btn btn-light m-4">Modificar</a></div>

        <div><a href="{{ route ('people.index') }}" class="btn btn-success m-4">Volver</a></div>
    </div>
</div>

@endsection