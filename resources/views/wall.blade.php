@extends('layouts.app')

@section('title', 'Muro')

@section('content')
   

       <h1 class="text-center">Muro</h1>

       <div class="container">
           <div class="row">
               @foreach ($posts as $post)

               <x-card  title="{{ $post['title'] }}" 
                        content="{{ $post['content'] }}" 
                        link="{{ route ('post', ['id' => $post['id']]) }}" /> 

               @endforeach

           </div>
       </div>


   @endsection