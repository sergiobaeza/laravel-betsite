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
@endsection
