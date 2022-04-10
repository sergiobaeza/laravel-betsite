<?php

namespace App\Http\Controllers;

use App\Models\CreditCard; 
use Illuminate\Http\Request;
use App\Models\User; 

class CreditCardsController extends Controller
{
    //


    public function store(Request $request, $id){
        // validamos los datos
        $request->validate([
            'num' => 'required|size:16',
            'cvv' => 'required|size:3', 
            'cadMonth' => 'required|size:2',
            'cadYear' => 'required|size:4', 
        ]); 

        $cc = new CreditCard();
        $cc->num = $request->num; 
        $cc->cvv = $request->cvv; 
        $cc->cadMonth = $request->cadMonth; 
        $cc->cadYear = $request->cadYear; 

        
        $cc->user()->associate(User::findOrFail($id)); 
        
        $cc->save(); 
        
        return redirect()->route('users-edit', ['id' => $id])->with('success', 'Tarjeta de credito añadida correctamente'); 
    }


    public function update(Request $request, $id){
        // validamos los datos
        $request->validate([
            'num' => 'required|size:16',
            'cvv' => 'required|size:3', 
            'cadMonth' => 'required|size:2',
            'cadYear' => 'required|size:4', 
        ]); 

        $cc = CreditCard::find($id); 
        $cc->num = $request->num; 
        $cc->cvv = $request->cvv; 
        $cc->cadMonth = $request->cadMonth; 
        $cc->cadYear = $request->cadYear; 
        
        $cc->save(); 


        return redirect()->back()->with('success', 'Tarjeta de credito editada correctamente'); 

    }

    public function destroy(Request $request, $id){
        $cc = CreditCard::find($id); 
        $cc->delete(); 
       
        return redirect()->back()->with('success', 'Tarjeta de credito borrada correctamente'); 
    }

    public function index(){
        $cc = CreditCard::all(); 
        
    }

}
