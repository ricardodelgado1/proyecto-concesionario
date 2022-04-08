@extends('inicio')

@section('title')
Eliminar Contacto
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar Contacto</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                ¿Esta seguro de eliminar este contacto?
                                <p>Una vez eliminado no podra ser recuoerado!</p>
                                <table class="table table-sm">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                    </thead>
                                    <tbody>
                                        <td>{{$contacto->nombre}}</td>
                                        <td>{{$contacto->apellido}}</td>
                                        <td>{{$contacto->telefono}}</td>
                                        <td>{{$contacto->email}}</td>
                                    </tbody>
                                </table>
                                <hr>
                                <form action="{{ route('contactos.destroy', $contacto->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <span class="fas fa-user-times"></span>Eliminar</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
