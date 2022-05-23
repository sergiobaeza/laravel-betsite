<?php

namespace App\Http\Controllers;

use App\Models\CreditCard; 
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use App\ServiceLayer\BalanceServices; 

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

    public function showUserAuth(){
        return view('session.user-creditcards', ['user' => Auth::user()]);
    }


    public function storeUserAuth(Request $request){
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

        
        $cc->user()->associate(Auth::user()); 
        
        $cc->save(); 
        
        return redirect()->route('session-add-creditcard')->with('success', 'Tarjeta de credito añadida correctamente'); 
    }

    public function addUserBalance(Request $request){
        // validamos los datos
        $request->validate([
            'dineroDepositar' => 'required|gte:5',
            'creditcard' => 'required', 
        ]); 

        if(!Auth::check()){
            return redirect()->back()->withErrors(['msg' => 'Debes iniciar sesión antes de apostar']);
        }

        $res = BalanceServices::addBalance(Auth::user(), $request->creditcard, $request->dineroDepositar); 



        if($res){
            return redirect()->route('session-add-creditcard')->with('success', 'Balance añadido correctamente'); 
        }
        else{
            return redirect()->route('session-add-creditcard')->withErrors(['msg' => 'Ha habido un problema al añadir el balance']);  
        }
    }


    public function withdrawUserBalance(Request $request){
        // validamos los datos
        $request->validate([
            'dineroRetirar' => 'required|gte:5',
            'creditcard' => 'required', 
        ]); 

        if(!Auth::check()){
            return redirect()->back()->withErrors(['msg' => 'Debes iniciar sesión antes de apostar']);
        }

        $res = BalanceServices::withdrawBalance(Auth::user(), $request->creditcard, $request->dineroRetirar); 



        if($res == -1){
            return redirect()->route('session-add-creditcard')->withErrors(['msg' => 'No tienes suficiente dinero']);  
        }
        else{
            return redirect()->route('session-add-creditcard')->with('success', 'Balance retirado correctamente'); 
        }
    }
}
