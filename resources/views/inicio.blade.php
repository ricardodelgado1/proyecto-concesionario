@extends('layouts/layout')

@section('title')
    Inicio
@endsection

@section('content')
<div class="container-sm">
    <!-- <h1>Esta es la pagina de inicio</h1> -->
</div>

<hr>

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/4.jpg" class="d-block w-100 h-20" alt="1">
    </div>
    <div class="carousel-item">
      <img src="/img/3.jpg" class="d-block w-100 h-20" alt="2">
    </div>
    <div class="carousel-item">
      <img src="/img/6.jpg" class="d-block w-100 h-20" alt="3">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<br>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col ">
       <div class="card" >
        <img src="/img/1.jpg" class="card-img-top" alt="imagen1">
        <div class="card-body">
            <h5 class="card-title">DIO LED STD 2023</h5>
            <p class="card-text">Nueva luz LED de farola y de posición que ofrece mayor seguridad y mejor diseño, Gracias a su sistema CBS (sistema de frenos combinado) distribuye el frenado de manera equilibrada para mayor seguridad en el camino,podrás cargar tu celular mientras llegas a tu destino</p>
            <a href="{{ url('/motos' ) }}" class="btn btn-primary stretched-link">Ver mas</a>
        </div>
       </div>
    </div>
    <div class="col">
      <div class="card" >
        <img src="/img/2.jpg" class="card-img-top" alt="imagen2">
        <div class="card-body">
            <h5 class="card-title">CBR 1000 SP1 Modelo 2021</h5>
            <p class="card-text">Freno delanteroBREMBO Hidráulico,Horquillas telescópicas invertidas Ölins NIX30 con 120 mm de carrera con control electrónico semi-activo de ajuste de precarga, compresión y extensión Tipo de suspensión trasera
                      Unidad Pro-link.</p>
            <a href="{{ url('/motos' ) }}" class="btn btn-primary stretched-link">Ver mas</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
      <div class="card">
        <img src="/img/5.jpg" class="card-img-top" alt="imagen3">
        <div class="card-body">
            <h5 class="card-title">XR 150L 2023</h5>
            <p class="card-text">a XR150L se destaca por su diseño deportivo y el reconocimiento del ADN de la familia Enduro de Honda.
            incorpora elementos que le permiten resistir todos terrenos y reaccionar ante cualquier necesidad gracias a su potente motor.</p>
            <a href="{{ url('/motos' ) }}" class="btn btn-primary stretched-link">Ver mas</a>
        </div>
       </div>
    </div>
  </div>
</div>

<br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        el cuerpo del modal
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<div class="container">
<hr>
 <div class="row">
    <div class="col">
       <h1>somos el mejor Concesionario</h1>
       <p class="lead">
        This is a lead paragraph. It stands out from regular paragraphs.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus doloremque quae atque nihil hic mollitia nobis deleniti facilis quod quam at explicabo dicta, aliquid pariatur aliquam quisquam incidunt. At, quis!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda perferendis similique totam harum aperiam officia velit autem soluta modi, beatae cupiditate! Nobis ullam excepturi, sit dignissimos praesentium reprehenderit nesciunt voluptatum?
        </p>
    </div>
    <div class="col">
       <p class="lead">
        This is a lead paragraph. It stands out from regular paragraphs.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus doloremque quae atque nihil hic mollitia nobis deleniti facilis quod quam at explicabo dicta, aliquid pariatur aliquam quisquam incidunt. At, quis!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda perferendis similique totam harum aperiam officia velit autem soluta modi, beatae cupiditate! Nobis ullam excepturi, sit dignissimos praesentium reprehenderit nesciunt voluptatum?
        </p>
    </div>

 </div>


</div>





@endsection
