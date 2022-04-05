@extends('inicio')

@section('title')
    Motos
@endsection

@section('content')

<div class="container">
<div class="row">
     <div class="col-sm-4">
        {{-- TODO: Imagen de la Moto --}}
        <img src="{{ $moto['poster']}}" style="height-460px"/>
     </div>
     <div class="col-sm-8">
          {{-- TODO: Datos de la Moto --}}
          <h2 class="text-start mt-3">{{ $moto->nombre}}</h2>
          <p class="text-start fs-5"><b>Modelo:</b> {{$moto->modelo}}
              <br>
              <b>Marca:</b> {{$moto->marca}}
          </p>
          <p class="lh-sm fs-5"><b>Descripcion:</b>{{ $moto->descripcion}}</p>
          <p class="lh-sm fs-5"><b>Precio:</b>{{ $moto->precio}}</p>

          <p class="lh-sm fs-5"><b>Estado:</b>
             {{$moto->separada? 'Moto actualmente separada ' : 'Moto disponible'}}</p>
          <div class="container p-0 mt-5">

            <a href="{{url('/motos/pedido')}}">
                <button type="button" class="btn btn-success">
                <i class="fa-regular fa-circle-left"></i>
                Comprar Moto
                </button>
            </a>



            @if ($moto->separada)
            <form action="/motos/noreservar/{{$moto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger" style="display:inline">
                    No Reservar
                </button>
            </form>
            @else
            <form action="/motos/reservar/{{$moto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-warning" style="display:inline">
                    Reservar
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
                         Volver listado
                    </button>
                 </a>
          </div>
     </div>
</div>



</div>



@endsection
