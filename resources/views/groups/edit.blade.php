@extends('layouts.app')

@section('title', 'Modificar grupo')

@section('content')
<h1 class="text-center">Modificar grupo</h1>

<div class="container">

    <form method="post" action="{{ route ('groups.update', ['group' => $group])}}" enctype="multipart/form-data">
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
                    <label for="title" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nombre del grupo"
                        value="{{ $group->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $group->description}}</textarea>
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
                <a href="{{ route ('groups.index') }}" class="btn btn-success ms-4">Volver</a>
            </div>
        </div>

    </form>
</div>

@endsection
