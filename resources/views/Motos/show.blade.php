@extends('inicio')

@section('title')
    Motos
@endsection

@section('content')

<div class="container">
<div class="row">
     <div class="col-sm-4">
        {{-- TODO: Imagen de la Moto --}}
        <img src="{{ $moto['poster']}}"/>
     </div>
     <div class="col-sm-8">
          {{-- TODO: Datos de la Moto --}}
          <h2 class="text-start mt-3">{{ $moto->nombre}}</h2>
          <p class="text-start fs-5"><b>Modelo:</b> {{$moto->modelo}}
              <br>
              <b>Marca:</b> {{$moto->marca}}
          </p>
          <p class="lh-sm fs-5"><b>Descripcion:</b>{{ $moto->descripcion}}</p>
          <p class="lh-sm fs-5"><b>Precio:</b> $ {{ number_format($moto->precio)}}</p>
          <p class="lh-sm fs-5"><b>Estado:</b>
             {{$moto->separada? 'Moto actualmente separada ' : 'Moto disponible'}}</p>
          <div class="container p-0 mt-5">


            <form action="/motos/carrito/{{$moto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success" style="display:inline">
                <span class="fas fa-cart-plus"></span>

                Agregar al carrito
                </button>
            </form>


            @if ($moto->separada)
            <form action="/motos/noreservar/{{$moto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger" style="display:inline">
                <span class="fas fa-minus"></span>
                    No Reservar
                </button>
            </form>
            @else
            <form action="/motos/reservar/{{$moto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-warning" style="display:inline">
                <span class="fas fa-plus"></span>Reservar
                <!-- fa-person-walking-arrow-loop-left -->
                </button>
            </form>
            @endif



                <!-- <a href="{{url('moto/edit', $id)}}">
                    <button class="btn btn-warning">
                    <i class="fa-solid fa-pencil"></i>
                        Editar Moto
                    </button>
                 </a> -->

                 <a href="{{url('/motos')}}">

                     <button class="btn btn-secondary">
                     <i class="fa-regular fa-circle-left"></i>
                     <span class="fas fa-address-book"></span>

                         Volver listado
                    </button>
                 </a>
          </div>
     </div>
</div>



</div>



@endsection
