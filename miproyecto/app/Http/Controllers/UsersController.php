<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    private function validateUser(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:App\Models\User,email', 
            'password' => 'required',
            'balance' => 'required|regex:/^\d+(\.\d{1,2})?$/'
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

    public function filter(Request $request){
        if($request->name == null && $request->email == null){
            return redirect()->route('users-index'); 
        }
        else if($request->name != null && $request->email == null){
            $users = User::where('name', 'LIKE', '%' . $request->name . '%')->paginate(15); 
            return view('users.index', ['users' => $users]); 
        }
        else if($request->name == null && $request->email != null){
            $users = User::where('email', $request->email)->paginate(15); 
            return view('users.index', ['users' => $users]); 
        }
        else{
            $users = User::where('email', $request->email)->where('name', 'LIKE', '%' . $request->name . '%')->paginate(15); 
            return view('users.index', ['users' => $users]); 
        }
    }


    public function update(Request $request, $id){
        // validamos los datos

        $request->validate([
            'name' => 'required|string',
            'email' => 'required', 
            'balance' => 'required|regex:/^\d+(\.\d{1,2})?$/'
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

    public function updateProfileAuth(Request $request, $id){
        // validamos los datos

        $request->validate([
            'name' => 'required|string',
            'email' => 'required', 
            'balance' => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ]); 
        
        $user = User::find($id); 
        $user->name = $request->name; 
        $user->email = $request->email; 
        if($request->password != NULL)
            $user->password = $request->password; 
        $user->balance = $request->balance; 

        $user->save(); 

        return redirect()->route('session-profile', ['id' => $user->id])->with('success', 'Usuario  correctamente'); 
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

    public function indexBy($opt){
        $users = User::paginate(15); 
        if($opt == 'name'){
            $users = User::orderBy('name', 'ASC')->paginate(15); 
        }
        else if($opt == 'email'){
            $users = User::orderBy('email', 'ASC')->paginate(15); 
        }
        else if($opt == 'balance'){
            $users = User::orderBy('balance', 'DESC')->paginate(15); 
        }
        return view('users.index', ['users' => $users]); 
    }
    
    public function show($id){
        $user = User::findOrFail($id); 
        return view('users.show', ['user' => $user]);
    }

    public function showProfileAuth() {
        return view('session.user-profile', ['user' => Auth::user()]);  
    }
}
