@extends('inicio')

@section('title')
Contactos
@endsection
@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Contactos</h2>
                            <a href="{{route('contactos.create')}}" class="btn btn-primary">
                                <span class="fas fa-user-plus"></span> Agregar Contacto
                            </a>
                            <hr>
                            @if ($mensaje= Session::get('succes'))
                            <div class="alert alert-success" role="alert">
                                {{$mensaje}}
                            </div>

                            @endif

                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>teléfono</th>
                                    <th>Email</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($contactos as $contact)
                                    <tr>
                                        <td>{{$contact->nombre}}</td>
                                        <td>{{$contact->apellido}}</td>
                                        <td>{{$contact->telefono}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td class="text-center">
                                            <a href="{{route ('contactos.edit', $contact->id)}}" class="btn btn-warning btn-sm">
                                                <span class="fas fa-user-edit"></span></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('contactos.show', $contact->id)}}" class="btn btn-danger btn-sm">
                                                <span class="fas fa-user-times"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
