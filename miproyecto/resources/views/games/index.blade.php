@extends('layout')


@section('title', 'Partidos')

@section('content')

    <div class="p-3">

        @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        <div class="row mx-auto">
            <div class="col-md-9 d-flex align-items-center">
                <form action="{{ route('games-add') }}">
                        <input type="submit" value="Añadir un nuevo partido" class="btn btn-primary my-2" /></div>
                </form>

                
            </div>
            
            
        </div>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Cuota1</th>
                <th scope="col">CuotaX</th>
                <th scope="col">Cuota2</th>
                <th scope="col">Equipo1</th>
                <th scope="col">Equipo2</th>
                <th scope="col">golesLocal</th>
                <th scope="col">golesVisitante</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>


        @foreach ($games as $game)
            

            <tbody>
                <tr>
                <th scope="row">{{ $game->id }}</th>
                <td>{{ $game->cuota1 }}</td>
                <td>{{ $game->cuotaX }}</td>
                <td>{{ $game->cuota2 }}</td>
                <td>{{ $game->equipo1 }}</td>
                <td>{{ $game->equipo2 }}</td>
                <td>{{ $game->golesLocal }}</td>
                <td>{{ $game->golesVisitante }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteGame{{ $game->id }}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteGame{{ $game->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteGameModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteGameModal">Eliminar partido</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Estás seguro que deseas eliminar el partido con id <b>{{ $game->id }}</b>. Esta accion no será reversible
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('games-delete', ['id' => $game->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <form class="d-inline" action="{{ route('games-edit', ['id' => $game->id]) }}">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>

                </td>
                </tr>
            </tbody>

               
        
        
        @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $games->links() }}
        </div>
        </div>
    
@endsection