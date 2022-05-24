@extends('layout')


@section('title', 'Usuarios')

@section('content')

@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
@if($errors->any())
<div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

@if (session('success'))
<h6 class="alert alert-success">{{ session('success') }}</h6>
@endif

<style>
    
</style>

<form method="POST" action="{{ route('session-profile-update', ['id' => Auth::user()->id]) }}">
    @method('PATCH')
    @csrf

    <div class="p-3 bg-white mb-10">
        <b>
            <h3>{{ Auth::user()->name }}</h3>
        </b>

        <label for="title" class="form-label">Nombre de usuario </label>
        <input type="text" readonly="readonly" class="form-control mb-2" name="name" id="name" placeholder="Tu nombre real" value="{{ $user->name }}">

        <label for="title" class="form-label">Correo electronico </label>
        <input type="email" class="form-control mb-2" name="email" id="email" placeholder="@gmail.com, @hotmail.com..." value="{{ $user->email }}">

        <label for="title" class="form-label">Contraseña </label>
        <input type="password" class="form-control mb-2" name="password" id="password">

        <a href="{{ url('/user/creditcards') }}" class="btn btn-primary btn-block" role="button" data-bs-toggle="button" aria-pressed="true">Cartera</a>

        <input type="submit" value="Actualizar" class="btn btn-success my-2" />

    </div>
</form>


@endsection