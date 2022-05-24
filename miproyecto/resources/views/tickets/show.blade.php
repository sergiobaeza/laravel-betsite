@extends('layout')


@section('title', 'Tickets')

@section('content')

<div class="p-3 bg-white">
    <form method="POST" action="{{ route('tickets-update', ['id' => $ticket->id]) }}">
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

            <label for="title" class="form-label">Cantidad apostada </label>
            <input type="text" class="form-control mb-2" name="dineroApostado" id="dineroApostado" placeholder="Introduce la cantidad" value="{{ $ticket->dineroApostado }}">

            <label for="title" class="form-label"> Usuario </label>
            <input type="text" class="form-control mb-2" name="user_id" id="user_id" placeholder="Identificación del usuarios" value="{{ $ticket->user_id }}">

            <input type="submit" value="Actualizar" class="btn btn-success my-2" />
        </div>
    </form>
    <div class="d-flex flex-row-reverse">
        <form action="{{ route('tickets-index') }}">
            <input type="submit" value="Volver" class="btn btn-primary my-2" />
    </div>
    </form>

</div>


@endsection