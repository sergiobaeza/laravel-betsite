@extends('layout')


@section('title', 'Usuarios')

@section('content')

    <div class="p-3">
        <form  method="POST" action="{{ route('users-store') }}">
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

                <label for="title" class="form-label">Nombre de usuario </label>
                <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Tu nombre real">

                <label for="title" class="form-label">Correo electronico </label>
                <input type="email" class="form-control mb-2" name="email" id="email" placeholder="@gmail.com, @hotmail.com...">

                <label for="title" class="form-label">Contraseña </label>
                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="*****">



                <label for="title" class="form-label">Balance </label>
                <input type="number" step="0.01" class="form-control mb-2" name="balance" id="balance" placeholder="EUR">
                




                <input type="submit" value="Crear usuario" class="btn btn-primary my-2" />
            </div>
        </form>
                    <div class="d-flex flex-row-reverse">
                <form action="{{ route('users-index') }}">
                    <input type="submit" value="Volver" class="btn btn-primary my-2" /></div>
            </form>
            
    </div>


@endsection