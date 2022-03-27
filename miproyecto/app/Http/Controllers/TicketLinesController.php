<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketLine;

class TicketLinesController extends Controller
{
    public function store(Request $request){
        $ticketline = new TicketLine;
        $ticketline->cuotaElegida = $request->cuotaElegida;
        $ticketline->game_id = $request->game_id;
        $ticketline->ticket_id = $request->ticket_id;
        $ticketline->save();

        // falta devolver la vista/routa
    }

    public function shown($id){
        $ticketline = TicketLine::find($id);
        // falta devolver la vista

    }

    public function update(Request $request, $id){
        $ticketline = TicketLine::find($id);
        $ticketline->cuotaElegida = $request->cuotaElegida;
        $ticketline->game_id = $request->game_id;
        $ticketline->ticket_id = $request->ticket_id;
        $ticketline->save();

        // falta devolver la vista/routa

    }

    public function destroy($id){
        $ticketline = TicketLine::find($id);
        $ticketline->delete();

        // falta devolver la vista/routa
    }
}
