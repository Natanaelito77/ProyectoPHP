@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$docente->nombre}}"disabled></input>

        </div>
    </div>

   
    <div class="row">
        <div class="col-md-4">
            <label for="descripcion" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$docente->apellido}}"disabled >

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="descripcion" class="form-label">Correo electronico</label>

            <input type="text" class="form-control" id="email" name="email" value="{{$docente->email}}" disabled>

        </div>
    </div>
    
   <br>
        <div class = "row">
            <div class="col-md-12">
                
                <a href="{{route('docentes.index')}}" class="btn btn-primary">Retornar</a>

            </div>
        </div>
    </br>      
@endsection