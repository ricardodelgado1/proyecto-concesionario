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

            @if ($moto->separada)
                <button type="button" class="btn btn-danger">No separar moto</button>
            @else
                <button type="button" class="btn btn-success">Comprar Moto</button>
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
