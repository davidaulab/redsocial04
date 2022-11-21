@extends('layouts.app')

@section('title', 'Home')

@section('content')



<h1 class="text-center my-4">Personas</h1>
<p>Una red social está compuesta de personas. ¿Quieres saber quienes estamos por aquí?</p>
<a href="{{ route ('people.index')}}"><img src ="{{asset ('/img/people.png')}}" class="img-fluid"></a>

<h1 class="text-center my-4">Muro</h1>
<p>A veces la comunicación no es fluida porque hay muros, pero el nuestro sirve para todo lo contrario.</p>
<a href="{{ route ('posts.index')}}"><img src ="{{asset ('/img/wall.png')}}" class="img-fluid" id="imgmuro" aria-describedby="tooltip"></a>


    <div id="tooltip" role="tooltip">
      Pincha aquí para acceder al muro
      <div id="arrow" data-popper-arrow></div>
    </div>


<script>
   
    </script>

@endsection   
