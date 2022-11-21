@extends('layouts.app')

@section('title', 'Nueva persona')

@section('content')
<h1 class="text-center">Nueva persona</h1>

<div class="container">

    <form method="post" action="{{ route ('people.store')}}" enctype="multipart/form-data">
        @csrf

    <div class="d-flex justify-content-center">

        <div class="column">

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la persona" value="{{ old ('name')}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email de la persona</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old ('email') }}">
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
         <div class="d-flex justify-content-center mt-4">Sólo los usuarios registrados pueden crear personas</div>
        @endauth
        </div>
        <div>
            <a href="{{ route ('people.index') }}" class="btn btn-success ms-4">Volver</a>
        </div>
    </div>

</form> 
</div>

@endsection