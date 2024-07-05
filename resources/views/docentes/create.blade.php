@extends('layouts.app')

@section('content')
<h1>Crear un nuevo docente</h1>
<form action="{{route('docentes.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4"> 
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" require>
        
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" require>

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" require>

        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" require>

        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{route('docentes.index')}}" class="btn btn-secundary">Cancelar</a>

        </div>

    </div>

    </br>
    
    

</form>
@endsection
