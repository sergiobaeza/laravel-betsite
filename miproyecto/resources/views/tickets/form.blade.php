@extends('layout')


@section('title', 'Tickets')

@section('content')

<div class="p-3">
    <form method="POST" action="{{ route('tickets-store') }}">
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

            <label for="title" class="form-label">Cantidad a apostar </label>
            <input type="text" class="form-control mb-2" name="dineroApostado" id="dineroApostado" placeholder="Introduce la cantidad a apostar">

            <label for="title" class="form-label">Asignar a un usuario </label>
            <input type="text" class="form-control mb-2" name="user_id" id="user_id" placeholder="Introduce el id del Usuario">

            <input type="submit" value="Añadir boleto" class="btn btn-primary my-2" />
        </div>
    </form>
    <div class="d-flex flex-row-reverse">
        <form action="{{ route('tickets-index') }}">
            <input type="submit" value="Volver" class="btn btn-primary my-2" />
    </div>
    </form>

</div>


@endsection