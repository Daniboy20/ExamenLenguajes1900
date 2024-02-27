<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    //
    public function home()
    {
        return view('inicio');
    }

    public function crear()
    {
        return view('nuevoVuelo');
    }

    public function editar()
    {
        return view('editarVuelo');
    }
}
