<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{

    public function index()
    {
        return view('servicios');
    }

    public function gps()
    {
        return view('servicios.gps');
    }
    public function cctv()
    {
        return view('servicios.cctv');
    }
    public function desarrollo()
    {
        return view('servicios.desarrollo');
    }
    public function alarmas()
    {
        return view('servicios.alarmas');
    }
    public function seguridadVehicular()
    {
        return view('servicios.seguridadVehicular');
    }
    public function seguridadPerimetral()
    {
        return view('servicios.seguridadPerimetral');
    }

    // Nuevas rutas

    public function mantenimiento()
    {
        return view('servicios.mantenimiento');
    }

    public function computo()
    {
        return view('servicios.computo');
    }

    public function amplificadorSeñal()
    {
        return view('servicios.amplificadorSeñal');
    }

    public function redesInalambricas()
    {
        return view('servicios.redesInalambricas');
    }

    public function cableadoEstructurado()
    {
        return view('servicios.cableadoEstructurado');
    }

    public function telefonia()
    {
        return view('servicios.telefonia');
    }
}
