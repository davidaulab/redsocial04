@extends('layouts.app')

@section('title', 'Ver post')

@section('content')
<h1 class="text-center">Ver post</h1>

<div class="container">

    <div class="d-flex justify-content-center">

        <x-card title="{{ $post->title }}" content="{{ $post->content }}" img="{{ $post->img}}" 
            author="{{ $post->user->name }}" group="{{ $post->group->title }}" />
           
    </div>

    <div class="d-flex justify-content-center ">
        @if (Auth::user()->id  == $post->user->id)  
            <script>
                function confirmarEnvio () {
                    return (confirm ('¿Estás seguro de borrar el post?'));
                }
                </script>
            <form method="post" action="{{ route ('posts.destroy', ['post' => $post] ) }}" onsubmit="confirmarEnvio ()">
                @method('DELETE')
                @csrf
                <!-- input type="hidden" name="id" value="{{$post->id}}" -->
                <div><button type="submit" class="btn btn-danger m-4">Eliminar</button></div>
            </form>

            <div><a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-light m-4">Modificar</a></div>
        @endif
        <div><a href="{{ route ('posts.index') }}" class="btn btn-success m-4">Volver</a></div>
    </div>
</div>

@endsection
