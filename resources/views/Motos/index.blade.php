@extends('inicio')

@section('title')
    Motos
@endsection
@section('content')

<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">precio</th>
      <th scope="col">Cilindraje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Motocross</td>
      <td>2009</td>
      <td>suzuki</td>
      <td>1600000</td>
      <td>500</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Enduro</td>
      <td>2017</td>
      <td>onda</td>
      <td>4000000</td>
      <td>700</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>scooter</td>
      <td>2021</td>
      <td>yamaha</td>
      <td>3600000</td>
      <td>250</td>
    </tr>
  </tbody>
</table> -->



<div class="container">
<h1>Catalogo de motos</h1>

   <div class="row">

   @foreach( $motos as  $moto )



    <div class="col">
        <div class="card" style="width: 18rem;">
        <a href="{{ url('/motos/show/' . $moto->id ) }}">

        <img src="{{$moto['poster']}}" style="height:200px"/>
        </a>
        <div class="card-body">
            <h5 class="card-title">{{$moto->nombre}}</h5>
            <p class="card-text">{{$moto->descripcion}}</p>
            <a href="{{ url('/motos/show/' . $moto->id ) }}" class="btn btn-primary">Comprar</a>
        </div>
        </div>
    </div>
    @endforeach
</div>




</div>
@endsection
