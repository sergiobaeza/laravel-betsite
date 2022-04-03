@extends('layout')


@section('title', 'Usuarios')

@section('content')

    <div class="p-3">

        @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
                <form action="{{ route('users-add') }}">
                    <input type="submit" value="Añadir un nuevo usuario" class="btn btn-primary my-2" /></div>
            </form>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
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
                <td>{{ $user->password }}</td>
                <td>{{ $user->balance }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUser">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUserModal" aria-hidden="true">
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
                            <form action="{{ route('users-delete', [$user->id]) }}" method="POST">
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
        </div>
    {{ $users->links() }}
@endsection