@extends('layout')


@section('title', 'Usuarios')

@section('content')
    <div class="p-3 bg-white">

        @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        <div class="row mx-auto">
            <div class="col-md-9 d-flex align-items-center">
                <form action="{{ route('users-add') }}">
                        <input type="submit" value="Añadir un nuevo usuario" class="btn btn-primary my-2" /></div>
                </form>

                
            </div>
            <form class="form-inline" action="{{ route('users-filter') }}" method="POST">
                @csrf
                    <input class="d-inline form-control mr-sm-2" type="search" name="name" id="name" placeholder="Filtrar por nombre..." aria-label="Search">
                    <input class="d-inline form-control mr-sm-2" type="search" name="email" id="email" placeholder="Filtrar por email..." aria-label="Search">
                    <button class="d-inline btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
                </form>
            
        </div>
            Ordenar por:
            <a href="/users">Id</a>
            <a href="/users/order/name">Nombre</a>
            <a href="/users/order/email">Correo</a>
            <a href="/users/order/balance">Balance</a>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Balance</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>


        @foreach ($users as $user)
            

            <tbody>
                <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->balance }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUser{{ $user->id }}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteUserModal">Eliminar usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Estás seguro que deseas eliminar al usuario <b>{{ $user->name }}</b> con id <b>{{ $user->id }}</b>. Esta accion no será reversible
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('users-delete', ['id' => $user->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <form class="d-inline" action="{{ route('users-edit', ['id' => $user->id]) }}">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>

                </td>
                </tr>
            </tbody>

               
        
        
        @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
        </div>
    
@endsection