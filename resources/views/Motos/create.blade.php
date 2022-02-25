

@extends('inicio')

@section('title')
    Creacion Moto
@endsection
@section('content')

<div class="container">
<h1>Creacion de motos</h1>
  <form method="post"  >
  {!! csrf_field() !!}
    <div class="mb-3">
        <label for="#" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="nombre">
    </div>
    <div class="mb-3">
        <label for="#" class="form-label">Modelo</label>
        <input type="text" class="form-control" name="modelo" aria-describedby="modelo">
    </div>
    <div class="mb-3">
        <label for="#" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" aria-describedby="marca">
    </div>
    <div class="mb-3">
        <label for="#" class="form-label">Poster(url)</label>
        <input type="text" class="form-control" name="poster" aria-describedby="poster">
    </div>
    <div class="mb-3">
        <label for="#" class="form-label">cilindraje</label>
        <input type="text" class="form-control" name="cilindraje" aria-describedby="cilindraje">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" aria-describedby="precio">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <br>
        <textarea name="descripcion" name="descripcion" cols="100" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  @endsection

