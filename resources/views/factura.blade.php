
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--     <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
 --><!--     <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
 -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
 <title>Document</title>

 <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        table { page-break-inside:auto;width: 100%;}

td,tr    { page-break-inside:avoid; page-break-after:auto ;width: 25%;text-align:center;}
thead { display:table-header-group;width: 25%; }
tfoot { display:table-footer-group }
    </style>
</head>
<body>

<header>


    <h1>Concesionario de motos</h1>
</header>


<main>
    <h1>Factura de Compra</h1>

  <div class="container">
   Factura N   {{ Auth::user()->id }}<br>
   Fecha :
   {{ date('Y-m-d H:i:s') }}

   <br>
   <br>
   usuario: {{ Auth::user()->name }}
   <br>
   correo: {{ Auth::user()->email }}
  </div>

  <br>
  <hr>
  <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Precio Final</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cart_items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{\Cart::session(auth()->id())->get($item->id)->price}}</td>
                <td>
                 {{\Cart::session(auth()->id())->get($item->id)->quantity}}
                </td>
                <td>{{\Cart::session(auth()->id())->get($item->id)->getPricesum()}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h4>Subtotal: $ {{\Cart::session(auth()->id())->getTotal()}}</h4>
    <h4>Iva(19%): $ {{\Cart::session(auth()->id())->getTotal()*0.19}}</h4>
    <h4>Total: $ {{\Cart::session(auth()->id())->getTotal()+(\Cart::session(auth()->id())->getTotal()*0.19)}}</h4>
    </div>
    </main>

    <footer>
      <p>        "teléfono": "teléfono123",
                "fax": "fax123",
                "correo electrónico": "123@mail.com",
                "web": "www.123.com"</p>






</footer>
</body>
</html>

