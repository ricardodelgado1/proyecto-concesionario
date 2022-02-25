<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function getRepuesto()
    {
        return view('servicios.repuestos');;

    }
    public function getMantenimiento()
    {

        return view('servicios.serviciotecnico');

    }
    public function getPqrs()
    {
        return view('servicios.pqrs');
    }
}
