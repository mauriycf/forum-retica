<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function redtica()
    {
    	return view('/institucion/que-es-redtica');
    }
    public function introduccion()
    {
    	return view('/institucion/introduccion');
    }

    public function areas()
    {
    	return view('/institucion/areas-tematicas');
    }

    public function actores(){
      return view('/institucion/actores');
    }

    public function sistemaProductivo()
    {
      return view('/institucion/sistema-productivo');
    }

    public function objetivos()
    {
      return view('/institucion/objetivos');
    }

    public function mision()
    {
      return view('/institucion/mision');
    }

    public function vision()
    {
      return view('/institucion/vision');
    }

    public function ubicacion()
    {
      return view('/institucion/ubicacion');
    }
}
