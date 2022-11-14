@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<h1 class="text-center"> Contacto</h1>

<form action="" method="post">

    @csrf
    
    <div class="container-sm">
        <div class="mb-3">
            <label for="name" class="form-label">Tu nombre</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Tu email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="nombre@email.com">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Tu consulta</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>

@if ($codigo = Session::get ('code')) 
<div id="confirmMessage" class="bg-white text-success border border-success p-2 mt-4">
    {{ $codigo}}  - {{ Session::get ('message') }}
</div>
@endif

@endsection
