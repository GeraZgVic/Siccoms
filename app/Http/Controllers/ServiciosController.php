<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{

    public function gps()
    {
        return view('servicios.gps');
    }
    public function cctv()
    {
        return view('servicios.gps');
    }
    public function desarrollo()
    {
        return view('servicios.cctv');
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
}
