<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Game;


class GameController extends Controller{

    private function validateGame(Request $request){
        $request->validate([
            'cuota1' => 'required',
            'cuotaX' => 'required', 
            'cuota2' => 'required',
            'equipo1' => 'required',
            'equipo2' => 'required',
            'golesLocal' => 'required',
            'golesVisitante' => 'required'
        ]); 
        
    }

    public function store(Request $request){
        // validamos los datos
        $this->validateGame($request); 


        $game = new Game();
        $game->cuota1 = $request->cuota1;
        $game->cuotaX = $request->cuotaX;
        $game->cuota2 = $request->cuota2; 
        $game->equipo1 = $request->equipo1; 
        $game->equipo2 = $request->equipo2;
        $game->golesLocal = $request->golesLocal; 
        $game->golesVisitante = $request->golesVisitante; 

        $game->save(); 
        return redirect()->route('games-add')->with('success', 'Partido creado correctamente'); 
    }

    
    
    public function index(){
        $games = Game::paginate(10);
        return view('games.index', ['games' => $games]); 
    }

    public function show($id){
        $game = Game::findOrFail($id); 
        return view('games.show', ['game' => $game]);
    }


    public function update(Request $request, $id){
        // validamos los datos

        $request->validate([
            'cuota1' => 'required',
            'cuotaX' => 'required', 
            'cuota2' => 'required', 
            'equipo1' => 'required',
            'equipo2' => 'required',
            'golesLocal' => 'required',
            'golesVisitante' => 'required'

        ]); 
        


        $game = Game::find($id); 
        $game->cuota1 = $request->cuota1; 
        $game->cuota2 = $request->cuota2;
        $game->cuotaX = $request->cuotaX;
        $game->equipo1 = $request->equipo1;
        $game->equipo2 = $request->equipo2;
        $game->golesLocal = $request->golesLocal; 
        $game->golesVisitante = $request->golesVisitante;

        $game->save(); 
        return redirect()->route('games-edit', ['id' => $game->id])->with('success', 'Partido actualizado correctamente'); 
    }

    public function destroy(Request $request, $id){
        $game = Game::find($id);
        $game->delete(); 
        return redirect()->route('games-index')->with('success', 'Partido ' . $game->id .' eliminado correctamente');
    }

    
}