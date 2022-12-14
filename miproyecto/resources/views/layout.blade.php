<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>DSSBet - @yield('title')</title>
</head>

<body style="background-color: #ddf5e3d1;">
  <nav class="navbar navbar-light bg-light">
    
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
      DSSBet
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Inicio</a></li>
        <li><a href="/bet" class="nav-link px-2 link-dark">Apostar</a></li>
        @auth
        <li><a href="/user/tickets" class="nav-link px-2 link-dark">Historial</a></li>
        <li><a href="/user/creditcards" class="nav-link px-2 link-dark">Añadir credito</a></li>
        <li><a href="/user/profile" class="nav-link px-2 link-dark">Perfil</a></li>

        @endauth
        <li><a href="/contacto" class="nav-link px-2 link-dark">Contacto</a></li>
      </ul>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      @guest
      <a href="{{ url('/login') }}" class="btn btn-primary" role="button" data-bs-toggle="button" aria-pressed="true">Iniciar sesión</a>
      <a href="{{ url('/register') }}" class="btn btn-primary" role="button" data-bs-toggle="button" aria-pressed="true">Registrar usuario</a>
      @endguest
      @auth
      {{ Auth::user()->balance }} €
      <a href="{{ url('/logout') }}" class="btn btn-primary" role="button" data-bs-toggle="button" aria-pressed="true">Cerrar sesión</a>
      @endauth

      @isadmin<span class="navbar-toggler-icon"></span>@endisadmin
    </button>
    

          @isadmin
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Indice <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/users') }}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/games') }}">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/tickets') }}">Tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/ticketlines') }}">TicketLines</a>
        </li>
        @endisadmin
        
      </ul>
    </div>
    

  </nav>

  <div class="container mt-4 ">
    @yield('content')
  </div>

  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Vuelve al principio</a>
    <p class="mb-1">Al acceder, seguir utilizando o navegar en este sitio Web, el cliente debe acpetar que utilicemos ciertas cookies de navegación para mejorar su experiencia de
        con nosotros. DSSBet solo utilizará cookies que mejoren su experiencia y no aquellas que interfieran con su privacidad.
    </p>
    <p class="mb-1">DSSBet cuenta con las oportunas licencias para operar en España emitidas por la Dirección General de Ordenación del Juego.
    </p>
    <p class="mb-1">ⓒ 2021 - 2022 DSSBet. Todos los derechos reservados
    </p>
    <p class="mb-0">
      <a href="/contacto">Sobre nosotros</a>
  </div>
  </footer>
</body>

</html>