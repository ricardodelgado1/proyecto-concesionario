@extends('inicio')

@section('title')
    Motos
@endsection
@section('content')


<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart_items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{\Cart::session(auth()->id())->get($item->id)->price}}</td>
                <td>
                 {{\Cart::session(auth()->id())->get($item->id)->quantity}}
                </td>
                <td>{{\Cart::session(auth()->id())->get($item->id)->getPricesum()}}</td>
                <td>
                <form method="POST" action="{{ url('/motos/carrito/' . $item->id )}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                </form>

            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total: $ {{\Cart::session(auth()->id())->getTotal()}}</h3>

    <a  href="{{ url('motos/carrito/factura') }}" class="btn btn-primary">Facturar</a>

    @endsection
