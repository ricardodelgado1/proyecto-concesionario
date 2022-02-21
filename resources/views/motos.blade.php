@extends('inicio')

@section('title')
    Motos
@endsection
@section('content')
    <div class="container"></div>
    <h1>Esta es la página de Motos</h1>
    <h2>¡Bienvenido!</h2>

<table class="table">
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
</table>
@endsection
