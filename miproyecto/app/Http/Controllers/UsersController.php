<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    private function validateUser(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email', 
            'password' => 'required',
        ]); 
    }

    public function store(Request $request){
        // validamos los datos
        validateUser($request); 


        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = $request->password; 
        $user->balance = 0.0; 

        $user->save(); 
    }


    public function update(Request $request, $id){
        // validamos los datos
        validateUser($request); 


        $user = User::find($id); 
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = $request->password; 
        $user->balance = 0.0; 

        $user->save(); 

    }

    public function destroy(Request $request, $id){
        $user = User::find($id); 
        $user->delete(); 
    }

    public function index(){
        $users = User::all(); 
        
    }
}
