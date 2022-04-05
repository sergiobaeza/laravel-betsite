@extends('layout')


@section('title', 'Ticket Lines')

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
                <form action="{{ route('ticketlines-add') }}">
                        <input type="submit" value="Añadir una nueva línea de boleto" class="btn btn-primary my-2" /></div>
                </form>
            </div>
        </div>
            Ordenar por:
            <a href="/ticketlines">Id</a>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Cuota Elegida</th>
                <th scope="col">Game ID</th>
                <th scope="col">Ticket ID</th>
                </tr>
            </thead>


        @foreach ($ticketline as $ticketlines)

            <tbody>
                <tr>
                <th scope="row">{{ $ticketlines->id }}</th>
                <td>{{ $ticketlines->cuotaElegida }}</td>
                <td>{{ $ticketlines->game_id }}</td>
                <td>{{ $ticketlines->ticket_id }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTicketLine">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteTicketLine" tabindex="-1" role="dialog" aria-labelledby="deleteTicketLineModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteTicketLineModal">Eliminar linea de boleto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro que deseas eliminar la línea de boleto con id <b>{{ $ticketlines->id }}</b>?. Esta accion no será reversible
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('ticketlines-delete', [$ticketlines->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <form class="d-inline" action="{{ route('ticketlines-edit', ['id' => $ticketlines->id]) }}">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>

                </td>
                </tr>
            </tbody>

               
        
        
        @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $ticketline->links() }}
        </div>
        </div>
    
@endsection