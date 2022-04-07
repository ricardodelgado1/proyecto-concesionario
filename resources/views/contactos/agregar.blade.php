@extends('inicio')

@section('title')
   Agregar Contacto
@endsection
@section('content')


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar Nuevo Contacto</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('contactos.store')}}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                                <label for="telefono">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                 <br>
                                 <button class="btn btn-primary">
                                 <span class="fas fa-plus"></span> Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
