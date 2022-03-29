<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'dineroApostado' => 'required'
        ]);

        $ticket = new Ticket();
        $ticket->dineroApostado = $request->dineroApostado;
        $ticket->user_id = $request->user_id;

        $ticket->save();

        // falta retornar la vista
    }

    public function update(Request $request, $id) {

        $ticket = Ticket::find($id);
        $ticket->dineroApostado = $request->dineroApostado;
        $ticket->user_id = $request->user_id;
        $ticket->save();
    }

    public function destroy(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->delete();
    }

    public function index() {
        $ticket = Ticket::all();
    }
}
