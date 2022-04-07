@extends('inicio')

@section('title')
    Repuestos
@endsection
@section('content')


<div class="container">
<h1>Catalogo de Repuestos</h1>

   <div class="row row-cols-1 row-cols-md-3 g-4">

   @foreach( $repuestos as  $repuesto )


    <br>
    <div class="col">
        <div class="card" style="width: 19rem; ">
        <a href="{{ url('/repuestos/show/' . $repuesto->id ) }}">

        <img src="{{$repuesto['poster']}}" class="card-img-top"/>
        </a>
        <div class="card-body">
            <h5 class="card-title">{{$repuesto->nombre}}</h5>
            <p class="card-text">{{$repuesto->descripcion}}</p>
            <a href="{{ url('/repuestos/show/' . $repuesto->id ) }}" class="btn btn-success btn-sm">
            <span class="fas fa-plus"></span> Ver mas</a>
        </div>
        </div>
    </div>
    <br> <br>
    @endforeach
 </div>




</div>
@endsection
