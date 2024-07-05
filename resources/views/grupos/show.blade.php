@extends('layouts.app')

@section('content')
<h1>Ver  Grupo</h1>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>

            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$grupo->nombre}}"disabled></input>

        </div>
    </div>

   
    <div class="row">
        <div class="col-md-4">
            <label for="descripcion" class="form-label">Descripcion</label>

            <textaera class="form-control" id="descripcion" name="descripcion" disabled>{{$grupo->descripcion}}</textarea>

        </div>
    </div>
    
   <br>
        <div class = "row">
            <div class="col-md-12">
                
                <a href="{{route('grupos.index')}}" class="btn btn-primary">Retornar</a>

            </div>
        </div>
    </br>      
@endsection