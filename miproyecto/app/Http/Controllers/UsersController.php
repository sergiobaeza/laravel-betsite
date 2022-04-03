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
            'email' => 'required|unique:App\Models\User,email', 
            'password' => 'required',
            'balance' => 'required'
        ]); 
        
    }

    public function store(Request $request){
        // validamos los datos
        $this->validateUser($request); 


        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = $request->password; 
        $user->balance = $request->balance; 

        $user->save(); 
        return redirect()->route('users-add')->with('success', 'Usuario creado correctamente'); 
    }


    public function update(Request $request, $id){
        // validamos los datos

        $request->validate([
            'name' => 'required|string',
            'email' => 'required', 
            'balance' => 'required'
        ]); 
        


        $user = User::find($id); 
        $user->name = $request->name; 
        $user->email = $request->email; 
        if($request->password != NULL)
            $user->password = $request->password; 
        $user->balance = $request->balance; 

        $user->save(); 
        return redirect()->route('users-edit', ['id' => $user->id])->with('success', 'Usuario actualizado correctamente'); 
    }

    public function destroy(Request $request, $id){
        $user = User::find($id); 
        $name = $user->name; 
        if($name == NULL)
            $name = ""; 
        $user->delete(); 
        return redirect()->route('users-index')->with('success', 'Usuario ' . $name .' eliminado correctamente');
    }

    public function index(){
        $users = User::paginate(10);
        return view('users.index', ['users' => $users]); 
        
    }
    
    public function show($id){
        $user = User::findOrFail($id); 
        return view('users.show', ['user' => $user]);
    }
}
