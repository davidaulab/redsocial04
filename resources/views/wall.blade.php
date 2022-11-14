@extends('layouts.app')

@section('title', 'Muro')

@section('content')
   

       <h1 class="text-center">Muro</h1>

       <div class="container">
           <div class="row">

            @foreach ($posts as $post)
           
               <x-card  title="{{ $post->title }}" 
                        content="{{ $post->content }}" 
                        link="{{ route ('post', ['post' => $post->id]) }}"
                        img="{{ $post->img }}" /> 

               @endforeach

           </div>
           <div class="d-flex justify-content-center mt-4"><a href="{{ route ('newpost') }}" class="btn btn-success">Nuevo post</a></div>
       </div>


   @endsection