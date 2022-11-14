@extends('layouts.app')

@section('title', 'About us')

@section('content')

<h1 class="text-center">About us</h1>

<div class="d-flex justify-content-center ">
    <x-card title="Mi red social" 
    img="{{ asset ('/img/redsocial.jpg')}}" >
        <x-slot:content>

            <p>Esta es la red social de los alumnos de Hackademy Part Time 4.</p>
            <p>Todos fueron alumnos de Aulab en el año 2022</p>
            
        </x-slot>

    </x-card>
</div>
@endsection
