@extends('layout')

@section('title', 'Inicio')

@section('content')
<script>
    function calcular()
    {
    var dineroApostado = document.getElementById('dineroApostado').value;
    var multiplicador = document.getElementById('cuotatotal').textContent; 
    if(dineroApostado == "") dineroApostado = 0; 
    document.getElementById('premio').textContent = (parseFloat(dineroApostado)*parseFloat(multiplicador)).toFixed(2);

   }
    </script>
<div class="p-3">
@if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

<div class="row">
    
  <div class="col-12 col-md-6 bg-white p-3">
    <b>Partidos disponibles</b>
        @foreach ($games as $game)
            <div id="partido" class="mt-2 mb-3">

                <h6><img src="{{ asset('img/match_icon.png') }}" width="20" height="20" class="d-inline-block align-top" alt="" class="mt-1">
                    {{ $game->equipo1 }} - {{ $game->equipo2 }}  &nbsp; &nbsp; &nbsp;       
                    <div class="mt-2">
                        
                    <form action="{{ route('ticket-cookie-store', ['matchId' => $game->id, 'resultado' => '1', 'cuota' => $game->cuota1]) }}" method="POST">
                                @method('POST')
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">1 {{ $game->cuota1 }} </button> &nbsp;
                    </form>

                    <form action="{{ route('ticket-cookie-store', ['matchId' => $game->id, 'resultado' => 'X', 'cuota' => $game->cuotaX]) }}" method="POST">
                                @method('POST')
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">X {{ $game->cuotaX }} </button> &nbsp;
                    </form>

                    <form action="{{ route('ticket-cookie-store', ['matchId' => $game->id, 'resultado' => '2', 'cuota' => $game->cuota2]) }}" method="POST">
                                @method('POST')
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">2 {{ $game->cuota2 }} </button> &nbsp;
                    </form>

                    </div>
                
                </h6>
                <div style="height: 1px; width: 100%; background-color: black; " class="mt-3" ></div>
                
            </div>
        @endforeach
  </div>
  <div class="col-6 col-md-4 p-3 offset-md-1 bg-white h-100">
      <b>Cupón</b>
      <div style="height: 1px; width: 100%; background-color: black; " class="mt-1" ></div>
      @foreach ($myticket as $row)
      <form action="{{ route('ticket-cookie-delete', ['matchId' => $row->game_id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </form>
        
      <div class="row mt-2">

        <div class="col-sm-8">        
            <b> {{ $row->game->getTitle() }}</b> 
            <div class="clearfix hidden-xs hidden-sm"> </div>
            Resultado: {{ $row->resultado}}
        </div>
        <div class="col-sm-4">{{ $row->cuotaElegida }}</div>
    </div>

      @endforeach

      <b>Cuota:</b> <div id="cuotatotal">{{ $mult }}</div>
      <b>Premio:</b> <div id="premio"></div>
      <div class="input-group mb-3 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Dinero a apostar</span>
  </div>
  <input type="number" id="dineroApostado" oninput="calcular()" min="0" step=".01" class="form-control" placeholder="Euros" aria-label="Euros" aria-describedby="basic-addon1">

</div>
<div>
    <form action="" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-success">Apostar</button>
                            </form>
  </div>
  </div>
</div>







    
</div>

@endsection