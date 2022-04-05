@extends('layout')


@section('title', 'Tickets')

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
                <form action="{{ route('tickets-add') }}">
                        <input type="submit" value="Añadir un nuevo boleto" class="btn btn-primary my-2" /></div>
                </form>
            
        </div>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Dinero Apostado</th>
                <th scope="col">Usuario</th>
                </tr>
            </thead>


        @foreach ($tickets as $ticket)
            

            <tbody>
                <tr>
                <th scope="row">{{ $ticket->id }}</th>
                <td>{{ $ticket->dineroApostado }}</td>
                <td>{{ $ticket->user_id }}</td>
                <td>                     

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTicket">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteTicket" tabindex="-1" role="dialog" aria-labelledby="deleteTicketModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteTicketModal">Eliminar Boleto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro que deseas eliminar el boleto <b>{{ $ticket->id }}. Esta accion no será reversible
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('tickets-delete', [$ticket->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <form class="d-inline" action="{{ route('tickets-edit', ['id' => $ticket->id]) }}">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>

                </td>
                </tr>
            </tbody>

               
        
        
        @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $tickets->links() }}
        </div>
        </div>
    
@endsection