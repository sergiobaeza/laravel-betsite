<?php 
namespace App\ServiceLayer;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket; 
use App\Models\Game; 
use App\Models\TicketLine; 


class TicketServices {

    public static function createTicket($ticketLines, $dineroApostar, $user) {
        // Revisar si tiene dinero suficiente
        if($dineroApostar > $user->balance || $dineroApostar < 1){
            return null;
        }

        DB::beginTransaction(); 


        $ticket = new Ticket(); 
        $ticket->user()->associate($user);

        $ticket->dineroApostado = $dineroApostar; 
        $user->balance = $user->balance - $dineroApostar; 
        $user->save(); 
        $ticket->save(); 

        foreach ($ticketLines as $a){
            $matchId = $a[0];
            $resultado = $a[1]; 
            $cuota = $a[2]; 

            $tl = new TicketLine(); 
            $tl->cuotaElegida = $cuota; 
            $tl->game()->associate(Game::find($matchId)); 
            $tl->ticket()->associate($ticket); 
            $tl->resultado = $resultado; 

            $tl->save(); 
        }


        DB::commit(); 
        return $ticket->id; 
    }
}
