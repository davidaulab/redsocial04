@extends('layouts.app')

@section('title', 'Nuevo grupo')

@section('content')
<h1 class="text-center">Nuevo grupo</h1>

<div class="container">

    <form method="post" action="{{ route ('groups.store')}}" enctype="multipart/form-data">
        @csrf

    <div class="d-flex justify-content-center">

        <div class="column">

            <div class="mb-3">
                <label for="title" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nombre del grupo" value="{{ old ('title')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción del grupo</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old ('description') }}</textarea>
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

        @auth()
        <button type="submit" class="btn btn-success">Guardar</button>
        @else
         <div class="d-flex justify-content-center mt-4">Sólo los usuarios registrados pueden crear grupos</div>
        @endauth
        </div>
        <div>
            <a href="{{ route ('groups.index') }}" class="btn btn-success ms-4">Volver</a>
        </div>
    </div>

</form> 
</div>

@endsection