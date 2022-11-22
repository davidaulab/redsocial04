@extends('layouts.app')

@section('title', 'Muro')

@section('content')
   

       <h1 class="text-center">Muro</h1>

       <div class="container">
           <div class="row">

            @foreach ($posts as $post)
           
               <x-card  title="{{ $post->title }}" 
                        content="{{ $post->content }}" 
                        link="{{ route ('posts.show', ['post' => $post->id]) }}"
                        img="{{ $post->img }}" 
                        author="{{ $post->user->name }}" /> 

               @endforeach

           </div>
           @auth()
           <div class="d-flex justify-content-center mt-4"><a href="{{ route ('posts.create') }}" class="btn btn-success">Nuevo post</a></div>
            @else
            <div class="d-flex justify-content-center mt-4"><p>Sólo los usuarios registrados pueden crear posts.</div>
            <div class="d-flex justify-content-center mt-4">Entra <a class="nav-link fw-bold" href="{{ route('login') }}">&nbsp;{{ __('aquí') }}&nbsp;</a> si ya tienes usuario o crea uno <a class="nav-link fw-bold" href="{{ route('register') }}">&nbsp;{{ __('nuevo') }}&nbsp;</a></div>
            
           @endauth
   
           {{ $posts->links () }}
           
        </div>


   @endsection