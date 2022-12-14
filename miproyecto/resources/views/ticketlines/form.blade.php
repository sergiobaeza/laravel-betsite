@extends('layout')


@section('title', 'Ticket Lines')

@section('content')

    <div class="p-3 bg-white">
        <form  method="POST" action="{{ route('ticketlines-store') }}">
            @csrf

            <div class="mb-3 col">
                    {{-- Error messages --}}
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <h6 class="alert alert-danger">{{ $error }}</h6>

            @endforeach
            
            @endif


            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <label for="title" class="form-label">Cuota elegida </label>
                <input type="text" class="form-control mb-2" name="cuota" id="cuota" placeholder="Introduce la cuota">

                <label for="title" class="form-label">Resultado </label>
                <select id="resultado" name="resultado" class="form-control">
                    <option value="1">Ganador Local</option>
                    <option value="X">Empate</option>
                    <option value="2">Ganador Visitante</option>
                </select>

                <label for="title" class="form-label mt-2">Game ID </label>
                <input type="text" class="form-control mb-2" name="game" id="game" placeholder="ID">

                <label for="title" class="form-label">Ticket ID </label>
                <input type="text" class="form-control mb-2" name="ticket" id="ticket" placeholder="ID">

                <input type="submit" value="Crear TicketLine" class="btn btn-primary my-2" />
            </div>
        </form>
                    <div class="d-flex flex-row-reverse">
                <form action="{{ route('ticketlines-index') }}">
                    <input type="submit" value="Volver" class="btn btn-primary my-2" /></div>
            </form>
            
    </div>


@endsection