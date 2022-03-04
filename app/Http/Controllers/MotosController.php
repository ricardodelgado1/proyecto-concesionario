<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotosController extends Controller
{
    /*
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function getIndex()
    {

        //return view('motos.index', ['arrayMotos' => $this->arrayMotos]);

        $motos = Moto::all();
        return view('motos.index', ['motos' => $motos]);

    }


    public function getShow($id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.show',  ['id' => $id,'moto' => $moto]);
    }

    public function addMoto(Request $request)
    {
        //$request = $request->all();

        $moto = new Moto;
        $moto->nombre = $request->input('nombre');
        $moto->modelo = $request->input('modelo');
        $moto->marca = $request->input('marca');
        $moto->poster = $request->input('poster');
        $moto->cilindraje = $request->input('cilindraje');
        $moto->precio = $request->input('precio');
        $moto->descripcion = $request->input('descripcion');

        $moto->save();
        return redirect('/motos');
    }

    public function getCreate()
    {

        return view('motos.create');

    }

    public function getEdit($id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.edit', ['moto' =>$moto,'id' => $id]);
    }


}
