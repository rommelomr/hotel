<?php

namespace App\Http\Controllers;
use App\Paises;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function registrarPais()
    {
    	dd(Paises::all());
    }
}
