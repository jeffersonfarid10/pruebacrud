<?php

namespace App\Http\Controllers;

//IMPORTAR AL MODELO USUARIO
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //MOSTRAR LA VISTA CON EL LISTADO DE USUARIOS CREADOS
        $users = User::all();

        //return $users;

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //MOSTRAR LA VISTA PARA CREAR UN NUEVO USUARIO
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.crud.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //return $user->name;
        //VISTA PARA VER EL REGISTRO Y SE LE PASA EL OBJETO TIPO USER DESDE LA VISTA INDEX
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //CAPTURAR EL ID DEL USUARIO AL QUE SE VA A EDITAR Y ENVIARLO A LA VISTA EDITAR
        $userId = $user->id;
        //return $userId;
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //return $request;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'password' => 'required'
        ]);

        //ACTUALIZAR LOS CAMPOS
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.crud.index');
    }
}
