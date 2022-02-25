<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotosController extends Controller
{
    /*
    */


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

        /*
        $moto = new Moto;
        $moto->nombre='VICTORY ADVANCE R 110';
        $moto->modelo='2023';
        $moto->marca='Auteco';
        $moto->poster='https://auteco.vteximg.com.br/arquivos/ids/209785-300-300/moto_victory_advancer110_negro_azul_2022_foto1.png?v=637684649355000000';
        //$moto->separada= false;
        $moto->cilindraje='109 cc';
        $moto->precio='5199000';
        $moto->descripcion='Descubre la moped tecnológicamente más avanzada de Auteco Mobility. Conoce el futuro y conduce en las calles con estilo.';

        $moto->save();
        return view('motos.create', array('moto'=>$moto)); */

    }

    public function getEdit($id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.edit', ['moto' =>$moto,'id' => $id]);
    }


}
