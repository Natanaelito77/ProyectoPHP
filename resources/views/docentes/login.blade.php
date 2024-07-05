@extends('layouts.app')

@section('content')
<h1>Crear un nuevo docente</h1>
<form action="{{route('docentes.login')}}" method="POST">
    @csrf
    

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
    <div style="margin-top: 10px" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Login</button>

        </div>

    </div>
    <div style="margin-top: 10px" class="row">
            @error('InvalidCredentials')
            <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
                {{$message}}
            </div>
            @enderror
    </div>
</form>
@endsection