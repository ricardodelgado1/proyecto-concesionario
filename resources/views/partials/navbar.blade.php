

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <span class="fas fa-motorcycle fa-2x"></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
            <span class="fas fa-home"></span>    Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/motos') }}">
            <span class="fas fa-motorcycle"></span>  motos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fas fa-list-alt"></span>    Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/repuestos') }}">Repuestos</a></li>
            <li><a class="dropdown-item" href="{{ url('/serviciotecnico') }}">Mantenimientos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">PQRS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/sobrenosotros') }}">
            <span class=" fas fa-users"></span>  Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/contactos') }}">
            <span class="fas fa-id-card"></span>  Contactos</a>
        </li>
      </ul>
      <ul></ul>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <a href="{{url('/motos/carrito')}}" class="btn btn-primary">
                            <i class="fa-solid fa-cart-shopping"></i>
                            @auth
                            {{\Cart::session(auth()->id())->getTotalQuantity()}}
                            @else
                            0
                            @endauth
                        </a>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

</nav>

</div>
