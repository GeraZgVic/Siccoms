<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar campos del formulario
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Autenticar al usuario
        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        
        return redirect()->route('dashboard');
        
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
