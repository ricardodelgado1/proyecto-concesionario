@extends('inicio')

@section('title')
    Motos
@endsection
@section('content')

<br>
<div class="container">
<h2>Mi pedido</h2>
    <div class="row">
       <div class="col-sm-8">



            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Entrega</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr> <!-- fila 1 -->
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>1000000</td>
                    <td>1</td>
                    <td>1000000</td>
                </tr>
                <tr> <!-- fila 2 -->
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>2000000</td>
                    <td>2</td>
                    <td>2000000</td>
                </tr>

            </tbody>
            </table>
        </div>
        <div class="col-sm-4">

            <h3>Resumen de Compra</h3>

            Calcular tiempos y costos de envio
            <br>
            <button type="button" class="btn btn-dark">Calcular domicilio</button>
            <br>
            Subtotal:
            <br>
            Total:
            <p>El costo de los trámites de tránsito no están incluido en el precio pagado en el sitio web y deberá asumirlos el cliente de</p>

            <button type="button" class="btn btn-warning">Iniciar Pago</button>

        </div>
    </div>
</div>



@endsection
