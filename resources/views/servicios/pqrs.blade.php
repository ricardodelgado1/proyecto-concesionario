@extends('inicio')

@section('title')
    pqrs
@endsection
@section('content')

<div class="container">
<br>
<h2>Formulario de Peticiones, Quejas, Reclamos, Sugerencias.</h2>
<br>
<form class="row g-3">

    <div class="col-4">
        <label for="exampleInputEmail1" class="form-label">Tipo de solicitud</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Seleccione</option>
        <option value="1">Peticion</option>
        <option value="2">Queja</option>
        <option value="3">Reclamo</option>
        <option value="3">Sugerencia</option>
        </select>
    </div>
    <div class="col-4">
        <label for="exampleInputEmail1" class="form-label">Tipo de solicitante</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Seleccione</option>
        <option value="1">Persona Juridica</option>
        <option value="2">Persona Natural</option>
        </select>
    </div>
    <div class="col-4">
        <label for="exampleInputEmail1" class="form-label">¿Desea radicar anónimamente?*</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Seleccione</option>
        <option value="1">SI</option>
        <option value="2">NO</option>
        </select>
    </div>

    <div class="col-7">
        <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="col-7">
        <label for="exampleInputEmail1" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-10">
        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
        <div class="form-floating">
        <textarea class="form-control" rows="20" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Comments</label>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Acepto los Términos de Uso y la Política de Tratamiento de Datos Personales</label>
    </div>
    <button type="submit" class="btn btn-primary col-2">Enviar</button>
  </form>
  </div>
  @endsection
