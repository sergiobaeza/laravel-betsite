<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Game;


class GameController extends BaseController{
    
    public function index(){
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function show($id){
        $game = Game::find($id);
        return view('games.show', ['game' => $game]);
    }

    public function update(Request $request, $id){
        $game = Game::find($id);
        $game->id = $request->id;
        $game->cuota1 = $request->cuato1;
        $game->cuotaX = $request->cuatoX;
        $game->cuota2 = $request->cuato2;
        $game->equipo1 = $request->equipo1;
        $game->equipo2 = $request->equipo2;
        $game->golesLocal = $request->golesLocal;
        $game->golesVisitante = $request->golesVisitante;
        $game->timestamps = $request->timestamps;

        return redirect()->route('games')->with('success', 'Partido actualizado');
    }

    public function destroy($id){
        $game = Game::find($id);
        $game->delete;

        return redirect()->route('games')->with('success', 'Partido eleminado');
    }
}