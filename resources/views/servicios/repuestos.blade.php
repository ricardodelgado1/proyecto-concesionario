@extends('inicio')

@section('title')
Repuestos
@endsection
@section('content')

<div class="container">
    <h1>Repuestos</h1>
    <form method="post">
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
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" aria-describedby="precio">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <br>
            <textarea name="descripcion" name="descripcion" cols="100" rows="5"></textarea>
        </div>

        <!-- <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/bateria.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Baterias</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/chasis.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chasis</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/asientos.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Asiento</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/embrague.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Embrague</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

