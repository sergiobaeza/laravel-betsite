<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Cookie; 
use App\Models\TicketLine; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function matches(){
        $games = Game::where('played', 'false')->paginate(15); 
        $ck = Cookie::get('ticket'); 
        $myTicket = []; 
        $multiplicador = 0; 
        if($ck != null){
            $array = json_decode(Cookie::get('ticket')); 


            foreach ($array as $a){
                $matchId = $a[0];
                $resultado = $a[1]; 
                $cuota = $a[2]; 
                if($multiplicador == 0) $multiplicador = $cuota; 
                else $multiplicador = $cuota * $multiplicador; 

                $tl = new TicketLine(); 
                $tl->cuotaElegida = $cuota; 
                $tl->game_id = $matchId; 
                $tl->resultado = $resultado; 

                array_push($myTicket, $tl); 

            }
        }
        
        $multiplicador = round($multiplicador, 2); 
        return view('matches', ['games' => $games, 'myticket' => $myTicket, 'mult' => $multiplicador]); 
    }

}
