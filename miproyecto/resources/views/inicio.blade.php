@extends('layout')

@section('title', 'Inicio')

@section('content')
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">DSSBet</h1>
        <p class="lead text-muted">Tu portal de apuestas donde podrás disfrutar de una gran selección de partidos</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('img/final_champions.jpg') }}" width="100%" height="225" class="bd-placeholder-img card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">Disfruta de la final de la Champions League y de las mejores cuotas!</p>
                </div>
          </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('img/rata.jpg') }}" width="100%" height="225" class="bd-placeholder-img card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">Kylian Mbappé ha dedicido quedarse en el PSG!</p>
                </div>
          </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('img/city.jpeg') }}" width="100%" height="225" class="bd-placeholder-img card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">El Manchester City se proclama campeón de la Premier League!</p>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<div class="container px-4 py-5 bg-white" id="featured-3">
    <h2 class="pb-2 border-bottom">Caracteristicas</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h2>Cobros automaticos</h2>
        <p>
          Una vez ganes tu apuesta el dinero aparecerá de forma automática en tu perfil y podrás retirarlo!
        </p>      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h2>Las mejores cuotas</h2>
        <p>Ofrecemos las mejores cuotas del mercado comparado con nuestra competencia!</p>
            </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h2>Interfaz sencilla y responsiva</h2>
        <p>Da igual si estás en un ordenador o en un móvil, podrás disfrutar de todas las funcionalidades de la aplicación</p>
      </div>
    </div>
  </div>
@endsection
