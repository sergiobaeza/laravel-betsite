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
            <a href="/ticketlines/order/cuotaElegida">Cuota Elegida</a>
            <a href="/ticketlines/order/game_id">Game ID</a>
            <a href="/ticketlines/order/ticket_id">Ticket ID</a>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Cuota Elegida</th>
                <th scope="col">Game ID</th>
                <th scope="col">Ticket ID</th>
                </tr>
            </thead>


        @foreach ($ticketlines as $ticketline)

            <tbody>
                <tr>
                <th scope="row">{{ $ticketline->id }}</th>
                <td>{{ $ticketline->cuotaElegida }}</td>
                <td>{{ $ticketline->game_id }}</td>
                <td>{{ $ticketline->ticket_id }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTicketLine{{ $ticketline->id }}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteTicketLine{{ $ticketline->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTicketLineModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteTicketLineModal">Eliminar linea de boleto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro que deseas eliminar la línea de boleto con id <b>{{ $ticketline->id }}</b>?. Esta accion no será reversible
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('ticketlines-delete', [$ticketline->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <form class="d-inline" action="{{ route('ticketlines-edit', ['id' => $ticketline->id]) }}">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>

                </td>
                </tr>
            </tbody>

               
        
        
        @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $ticketlines->links() }}
        </div>
        </div>
    
@endsection