@extends('layouts.app')

@section('title', 'Personas')

@section('content')
   

       <h1 class="text-center">Personas</h1>

       <div class="container">
           <div class="row">

            @foreach ($people as $person)
           
               <x-card  title="{{ $person->name }}" 
                        content="{{ $person->email }}" 
                        link="{{ route ('people.show', ['person' => $person->id]) }}"
                         /> 

               @endforeach

           </div>
           <div class="d-flex justify-content-center mt-4"><a href="{{ route ('peoples.create') }}" class="btn btn-success">Nueva persona</a></div>
           
        </div>


   @endsection