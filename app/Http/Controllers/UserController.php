<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',                
            'password_confirmation' => 'required|min:6|max:20|same:password',
        ]);

        $input = request()->except('password','password_confirmation');
        $user = new User($input);
        $user->password=bcrypt(request()->password);
        $user->save();

        return back()->with('success', 'Usuario creado satisfactoriamente');
    }

    public function formUser()
    {
        abort_unless(auth()->user()->hasRole('admin'), 403);
        $users = User::all();
        return view('auth/create', compact('users'));
    }

    public function update(Request $request)
    {
        $users = User::find($request->id);
        return response()->json($users);
    }

    public function updateUser(Request $request)
    {
        $users = User::find($request->id);
        $users->password = bcrypt(request()->password);
        $users->save();
        if ($users) {
            return response()->json('Actualizado');
        }else {
            return response()->json('Ocurrió un error');
        }
    }
}
