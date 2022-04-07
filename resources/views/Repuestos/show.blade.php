@extends('inicio')

@section('title')
    Repuestos
@endsection

@section('content')

<div class="container">
<div class="row">
     <div class="col-sm-4">
        {{-- TODO: Imagen del repuesto --}}
        <img src="{{ $repuesto['poster']}}"/>
     </div>
     <div class="col-sm-8">
          {{-- TODO: Datos del Repuesto --}}
          <h2 class="text-start mt-3">{{ $repuesto->nombre}}</h2>
          <p class="text-start fs-5"><b>Marca:</b> {{$repuesto->marca}}
              <br>
              <b>Modelo:</b> {{$repuesto->modelo}}

          </p>
          <p class="lh-sm fs-5"><b>Descripcion:</b>{{ $repuesto->descripcion}}</p>
          <p class="lh-sm fs-5"><b>Precio:</b>{{ $repuesto->precio}}</p>

          <p class="lh-sm fs-5"><b>Estado:</b>
             {{$repuesto->separado? 'Repuesto separado ' : 'Repuesto disponible'}}</p>
          <div class="container p-0 mt-5">


            <form action="/repuestos/carrito/{{$repuesto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success" style="display:inline">
                Agregar al carrito
                </button>
            </form>




            @if ($repuesto->separado)
            <form action="/repuestos/noreservar/{{$repuesto->id}}" method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger" style="display:inline">
                    No Reservar
                </button>
            </form>
            @else
            <form action="/repuestos/reservar/{{$repuesto->id}}" method="POST" style="display:inline">
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

                 <a href="{{url('/repuestos')}}">

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
