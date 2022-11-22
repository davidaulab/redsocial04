@extends('layouts.app')

@section('title', 'Nuevo post')

@section('content')
<h1 class="text-center">Nuevo post</h1>

<div class="container">

    <form method="post" action="{{ route ('posts.store')}}" enctype="multipart/form-data">
        @csrf

    <div class="d-flex justify-content-center">

        <div class="column">

            <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Título del post" value="{{ old ('title')}}">
            </div>
            <div class="mb-3">
                <label for="group_id" class="form-label">Grupo en el que se publicará</label>
                <select class="form-control" name="group_id" id="group_id" placeholder="Grupo del post" value="{{ old ('group_id')}}">
                    @foreach ($groups as $group)
                    <option value="{{ $group->id}}"> {{ $group->title }} </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Cuerpo del mensaje</label>
                <textarea class="form-control" name="content" id="conten" rows="3">{{ old ('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" name="img" id="img" placeholder="Selecciona la imagen">
            </div>
            <div class="mb-3">
                @if (isset($errors))
    
                @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }} </span><br>    
                    @endforeach
                    
                @endif                
            </div>

        </div>
        @auth()
       <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">     
       @endauth
      
    </div>
    <div class="d-flex justify-content-center ">
        <div>

        @auth()
        <button type="submit" class="btn btn-success">Guardar</button>
        @else
         <div class="d-flex justify-content-center mt-4">Sólo los usuarios registrados pueden crear posts</div>
        @endauth
        </div>
        <div>
            <a href="{{ route ('posts.index') }}" class="btn btn-success ms-4">Volver</a>
        </div>
    </div>

</form> 
</div>

@endsection
