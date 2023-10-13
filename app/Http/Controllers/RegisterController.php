<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
        
    }

    public function listar()
    {
        $users = User::all(); // Obtener los usuarios

        return view('welcome', compact('users'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required | unique:users',
            'email' => 'required | unique:users|email|max:60',
            'password' => 'required | confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */

    public function actualizar()  {
        return view('auth.update');
    }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $user->update($request->all());

    return redirect('/');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return redirect('/');
    }
}
