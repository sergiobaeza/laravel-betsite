<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models; 

class RelationsTest extends TestCase
{



    /** @test
     */
    public function testGameToTicket()
    {
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

        $ticket = new \App\Models\Ticket(); 
        $ticket->dineroApostado = 20;  
        $ticket->save();
        $ticket_id = $ticket->id; 

        $tL = new \App\Models\TicketLine();
        $tL->cuotaElegida = 1.05; 
        $tL->game()->associate($game); 
        $tL->ticket()->associate($ticket); 
        $tL->save(); 
        

        $this->assertEquals($game->ticketLines->get(0)->cuotaElegida, 1.05); 
        $this->assertEquals($game->ticketLines->get(0)->ticket->dineroApostado, 20); 



    }

    /** @test */
    public function testTicketToGame(){
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

        $ticket = new \App\Models\Ticket(); 
        $ticket->dineroApostado = 20;  
        $ticket->save();
        $ticket_id = $ticket->id; 

        $tL = new \App\Models\TicketLine();
        $tL->cuotaElegida = 1.05; 
        $tL->game()->associate($game); 
        $tL->ticket()->associate($ticket); 
        $tL->save(); 
        

        $this->assertEquals($ticket->ticketLines->get(0)->cuotaElegida, 1.05); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->cuota1, 1.05); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->cuota2, 21); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->cuotaX, 11); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->equipo1, 'PSG'); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->equipo2, 'Hercules'); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->golesLocal, 6); 
        $this->assertEquals($ticket->ticketLines->get(0)->game->golesVisitante, 1); 

    }
}
