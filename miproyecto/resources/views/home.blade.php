@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Usuario registrado con éxito!') }}
                </div>
                <a class="btn btn-primary" href="{{ url('/') }}" role="button">Comienza a apostar!</a>
            </div>
        </div>
    </div>
</div>
@endsection
