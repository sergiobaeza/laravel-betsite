<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\TicketLine; 
use App\Models\Ticket; 
use App\Models\Game; 

class TicketLineTest extends TestCase
{
    /** @test
     */
    public function ticketLineTest()
    {
        $tL = new TicketLine();
        $tL->cuotaElegida = 2; 
        $this->expectException(\Illuminate\Database\QueryException::class);
        $tL->save(); 
    }

    /** @test */
    public function ticketLineTest2(){
        $game = new \App\Models\Game(); 
        $game->cuota1 = 1.05; 
        $game->cuota2 = 21; 
        $game->cuotaX = 11;
        $game->equipo1 = 'PSG';
        $game->equipo2 = 'Hercules'; 
        $game->golesLocal = 6;
        $game->golesVisitante = 1;  
        $game->save(); 
        $game_id = $game->id; 

        $ticket = new Ticket(); 
        $ticket->dineroApostado = 20;  
        $ticket->save();
        $ticket_id = $ticket->id; 

        $tL = new TicketLine();
        $tL->cuotaElegida = 21; 
        $tL->game()->associate($game); 
        $tL->ticket()->associate($ticket); 
        $tL->save(); 
        $tL_id = $tL->id; 

        $tL2 = TicketLine::find($tL_id); 
        $this->assertEquals($tL2->cuotaElegida, $tL->cuotaElegida);
        $this->assertEquals($game_id, $tL->game_id);
        $this->assertEquals($ticket_id, $tL->ticket_id);
    }
}
