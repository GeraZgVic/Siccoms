<?php

namespace App\Http\Controllers;

use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'mensaje' => 'required|max:200',
            'g-recaptcha-response' => ['required', new ReCaptcha()]
        ]);

        Mail::to('victor.zuniga@siccoms.com')->send(new ContactoMailable($request->all()));

        return redirect()->route('contacto.index')->with('success','Se envió el mensaje correctamente');
    }
}
