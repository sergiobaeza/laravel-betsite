<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie; 

class CuponCookieController extends Controller
{
    //
    public function add(Request $request){
        $matchId = $request->query->get('matchId'); 
        $resultado = $request->query->get('resultado');
        $cuota = $request->query->get('cuota'); 

        $cookie = Cookie::get('ticket');
        $cookie = json_decode($cookie, true); 
        $match = [$matchId, $resultado, $cuota];  
        if($cookie == null){
            $cookie = [$matchId => $match]; 
        }
        else{
            $cookie[$matchId] = $match; 
        }

        $json = json_encode($cookie); 
        return redirect()->back()->withCookie(cookie('ticket', $json, 60))->with('success', 'Cupon añadido correctamente'); 
    }

    public function delete(Request $request, $matchId){
        $cookie = Cookie::get('ticket');
        $cookie = json_decode($cookie, true); 
        unset($cookie[$matchId]);


        $json = json_encode($cookie); 
        return redirect()->back()->withCookie(cookie('ticket', $json, 60))->with('success', 'Cupon eliminado correctamente'); 
    }

}
