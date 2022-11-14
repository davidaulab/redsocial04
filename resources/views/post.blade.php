@extends('layouts.app')

@section('title', 'Ver post')

@section('content')
<h1 class="text-center">Ver post</h1>

<div class="container">

    <div class="d-flex justify-content-center">

        <x-card title="{{ $post->title }}" content="{{ $post->content }}" img="{{ $post->img}}"  />
           
    </div>

    <div class="d-flex justify-content-center ">
        <div><a href="{{ route('editpost', ['post' => $post]) }}" class="btn btn-light m-4">Modificar</a></div>
        <div><a href="{{ route ('wall') }}" class="btn btn-success m-4">Volver</a></div>
    </div>
</div>

@endsection
