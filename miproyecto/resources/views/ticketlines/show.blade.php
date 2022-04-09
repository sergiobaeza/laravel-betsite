@extends('layout')


@section('title', 'Ticket Lines')

@section('content')

    <div class="p-3">
        <form  method="POST" action="{{ route('ticketlines-update', ['id' => $ticketline->id]) }}">
        @method('PATCH')    
        @csrf

            <div class="mb-3 col">
                
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <h6 class="alert alert-danger">{{ $error }}</h6>

            @endforeach
            
            @endif


            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

                <label for="title" class="form-label">Cuota elegida </label>
                <input type="text" class="form-control mb-2" name="cuota" id="cuota" placeholder="Introduce la cuota" value="{{ $ticketline->cuotaElegida }}">

                <label for="title" class="form-label">Resultado </label>
                <select id="resultado" name="resultado" class="form-control">
                    @if ($ticketline->resultado == '1')    
                    <option value="1" selected>Ganador Local</option>
                    <option value="X">Empate</option>
                    <option value="2">Ganador Visitante</option>
                    @endif
                    @if ($ticketline->resultado == 'X') 
                    <option value="1">Ganador Local</option>
                    <option value="X" selected>Empate</option>
                    <option value="2">Ganador Visitante</option>
                    @endif
                    @if ($ticketline->resultado == '2')
                    <option value="1" >Ganador Local</option>
                    <option value="X">Empate</option>
                    <option value="2" selected>Ganador Visitante</option>
                    @endif
                </select> 

                <label for="title" class="form-label mt-2">Game ID </label>
                <input type="text" class="form-control mb-2" name="game" id="game" placeholder="ID" value="{{ $ticketline->game_id }}">

                <label for="title" class="form-label">Ticket ID </label>
                <input type="text" class="form-control mb-2" name="ticket" id="ticket" placeholder="ID" value="{{ $ticketline->ticket_id }}">
                

                <input type="submit" value="Actualizar" class="btn btn-success my-2" />
            </div>
        </form>
        <div class="d-flex flex-row-reverse">
                <form action="{{ route('ticketlines-index') }}">
                    <input type="submit" value="Volver" class="btn btn-primary my-2" /></div>
            </form>
            
    </div>


@endsection