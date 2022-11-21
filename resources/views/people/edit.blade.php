@extends('layouts.app')

@section('title', 'Modificar persona')

@section('content')
<h1 class="text-center">Modificar persona</h1>

<div class="container">

    <form method="post" action="{{ route ('people.update', ['person' => $person])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="d-flex justify-content-center">

            <div class="column">
                @isset($img)
                @if($img != '')
                <img src="{{ $img }}" class="card-img-top" alt="{{ $name }}">
                @else
                <img src="{{ asset ('/img/logo.png') }}" class="card-img-top" alt="{{ $name }}">

                @endif
                @endisset
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la persona"
                        value="{{ $person->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $person->email}}">
                </div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Perfil</label>
                    <select name="rol" id="rol" class="form-control" >
                        @foreach ($roles as $rol)
                        
                        <option value="{{$rol->id}}">{{$rol->name}}</option>
                            
                        @endforeach

                    </select>
                    
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
                <a href="{{ route ('people.index') }}" class="btn btn-success ms-4">Volver</a>
            </div>
        </div>

    </form>
</div>

@endsection
