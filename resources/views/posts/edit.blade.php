@extends('layouts.app')

@section('title', 'Modificar post')

@section('content')
<h1 class="text-center">Modificar post</h1>

<div class="container">

    <form method="post" action="{{ route ('posts.update', ['post' => $post])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="d-flex justify-content-center">

            <div class="column">
                @isset($img)
                @if($img != '')
                <img src="{{ $img }}" class="card-img-top" alt="{{ $title }}">
                @else
                <img src="{{ asset ('/img/logo.png') }}" class="card-img-top" alt="{{ $title }}">

                @endif
                @endisset
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Título del post"
                        value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Cuerpo del mensaje</label>
                    <textarea class="form-control" name="content" id="conten" rows="3">{{ $post->content}}</textarea>
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
        </div>

        <div class="d-flex justify-content-center ">
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            <div>
                <a href="{{ route ('posts.index') }}" class="btn btn-success ms-4">Volver</a>
            </div>
        </div>

    </form>
</div>

@endsection
