@extends('layouts.app')

@section('title', 'Personas')

@section('content')
    <h1>Página PEOPLE</h1>


    @for ($i = 0; $i < 10; $i++)
      <p>{{ $i }} Hola  {{ $name }}  </p>
    
    @endfor
    
@endsection