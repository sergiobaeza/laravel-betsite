<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Game; 

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function game_test()
    {
        $game = new Game(); 
        $game->cuota1 = 1.05; 
        $game->cuota2 = 21; 
        $game->cuotaX = 11;
        $game->equipo1 = 'PSG';
        $game->equipo2 = 'Hercules'; 
        $game->golesLocal = 6;
        $game->golesVisitante = 1;  
        $game->save(); 

        $id = $game->id; 

        $game2 = Game::find($id); 
        $this->assertEquals($game->cuota1, $game2->cuota1); 
        $this->assertEquals($game->cuota2, $game2->cuota2); 
        $this->assertEquals($game->cuotaX, $game2->cuotaX); 
        $this->assertEquals($game->equipo1, $game2->equipo1); 
        $this->assertEquals($game->equipo2 , $game2->equipo2); 
        $this->assertEquals($game->golesLocal, $game2->golesLocal); 
        $this->assertEquals($game->golesVisitante, $game2->golesVisitante); 

    }
}
