@extends('layouts.app')

@section('content')
<h1>Editar un docente</h1>
<form action="{{route('docentes.update', $docente->id)}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4"> 
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$docente->nombre}}">
        
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$docente->apellido}}">

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$docente->email}}">

        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value="{{$docente->password}}"disabled>

        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="{{route('docentes.index')}}" class="btn btn-secundary">Cancelar</a>

        </div>

    </div>

    </br>
    
    

</form>
@endsection