<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketLine;

class TicketLinesController extends Controller
{
    public function validateTicketLines(Request $request){
        $request->validate([
            'cuota' => 'required',
            'game' => 'required',
            'ticket' => 'required',
            'resultado' => 'required'
        ]);
        
    }
    public function store(Request $request){
        $this->validateTicketLines($request);

        $ticketline = new TicketLine;
        $ticketline->cuotaElegida = $request->cuota;
        $ticketline->game_id = $request->game;
        $ticketline->ticket_id = $request->ticket;
        $ticketline->resultado = $request->resultado; 
        $ticketline->save();

        return redirect()->route('ticketlines-add')->with('success', 'Línea de boleto creada correctamente');
    }

    public function show($id){
        $ticketline = TicketLine::find($id);
        return view('ticketlines.show', ['ticketline' => $ticketline]);

    }
    public function index(){
        $ticketline = TicketLine::paginate(10);
        return view('ticketlines.index', ['ticketlines' => $ticketline]);
    }

    public function update(Request $request, $id){
        $this->validateTicketLines($request);
        $ticketline = TicketLine::find($id);
        $ticketline->cuotaElegida = $request->cuota;
        $ticketline->game_id = $request->game;
        $ticketline->ticket_id = $request->ticket;
        $ticketline->resultado = $request->resultado; 
        $ticketline->save();

        return redirect()->route('ticketlines-edit', ['id' => $ticketline->ticket_id])->with('success', 'Línea de boleto actualizada correctamente');

    }

    public function indexBy($opt){
        $ticketline = TicketLine::paginate(15); 
        if($opt == 'cuotaElegida'){
            $ticketline = TicketLine::orderBy('cuotaElegida', 'DESC')->paginate(15); 
        }
        else if($opt == 'game_id'){
            $ticketline = TicketLine::orderBy('game_id', 'DESC')->paginate(15); 
        }
        else if($opt == 'ticket_id'){
            $ticketline = TicketLine::orderBy('ticket_id', 'DESC')->paginate(15); 
        }
        return view('ticketlines.index', ['ticketlines' => $ticketline]);
    }

    public function destroy($id){
        $ticketline = TicketLine::find($id);
        $ticketline->delete();

        return redirect()->route('ticketlines-index')->with('succes', 'Línea de boleto eliminada correctamente');
    }
}
