@extends('inicio')

@section('title')
   Editar Contacto
@endsection
@section('content')


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar Contacto</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('contactos.update',$contactos->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                required value="{{$contactos->nombre}}">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"
                                required value="{{$contactos->apellido}}">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                required value="{{$contactos->telefono}}">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                 required value="{{$contactos->email}}">
                                 <br>
                                 <button class="btn btn-warning">
                                 <span class="fas fa-edit"></span>actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
