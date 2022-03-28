<?php

namespace App\Http\Controllers;

use App\Models\CreditCard; 
use Illuminate\Http\Request;

class CreditCardsController extends Controller
{
    //

    private function validateCreditTarget(Request $request){
        $request->validate([
            'num' => 'required|integer|size:12',
            'cvv' => 'required|integer|size:3', 
            'cadMonth' => 'required|integer|gte:1|lte:12',
            'cadYear' => 'required|integer|gte:2022', 
        ]); 
    }

    public function store(Request $request){
        // validamos los datos
        validateCreditTarget($request); 


        $cc = new CreditCard();
        $cc->num = $request->num; 
        $cc->cvv = $request->cvv; 
        $cc->cadMonth = $request->cadMonth; 
        $cc->cadYear = $request->cadYear; 
        
        $cc->save(); 
    }


    public function update(Request $request, $id){
        // validamos los datos
        validateCreditTarget($request); 

        $cc = CreditCard::find($id); 
        $cc->num = $request->num; 
        $cc->cvv = $request->cvv; 
        $cc->cadMonth = $request->cadMonth; 
        $cc->cadYear = $request->cadYear; 
        
        $cc->save(); 

    }

    public function destroy(Request $request, $id){
        $cc = CreditCard::find($id); 
        $cc->delete(); 
    }

    public function index(){
        $cc = CreditCard::all(); 
        
    }

}
