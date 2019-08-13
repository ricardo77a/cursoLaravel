<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    /* Ruta y controlador de prueba sin parámetros */
    public function pruebaRuta()
    {
        return 'hola mundo desde controller';
    }

    /* Ruta y controlador de prueba con parámetros */
    public function nombre($nombre)
    {
        return 'Tu nombre es '.$nombre;
    }

    /* Ruta y controlador de prueba con parámetros a vista */
    public function dependencia($dependencia)
    {
        //return view('dependencia', compact('dependencia'));


        return view('dependencia')->with('dependencia', $dependencia);
    }

}
