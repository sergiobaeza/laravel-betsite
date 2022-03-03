<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ticket; 

class TicketTest extends TestCase
{
    /**
     * @test
     */
    public function ticket_test()
    {
        $ticket = new Ticket(); 
        $ticket->dineroApostado = 20;  
        $ticket->save();
        $id = $ticket->id; 
    

        $ticket2 = Ticket::find($id); 
        $this->assertEquals(20, $ticket2->dineroApostado); 
    }
}
