<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repuesto;

class RepuestosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function getIndex()
    {

        //return view('repuestos.index', ['arrayRepuestos' => $this->arrayRepuestos]);
        $repuestos = Repuesto::all();
        return view('repuestos.index', ['repuestos' => $repuestos]);



    }

    public function getShow($id)
    {
        $repuesto = Repuesto::findOrFail($id);
        return view('repuestos.show',  ['id' => $id,'repuesto' => $repuesto]);
    }


    public function addRepuesto(Request $request)
    {
        //$request = $request->all();

        $repuesto = new Repuesto;
        $repuesto->nombre = $request->input('nombre');
        $repuesto->modelo = $request->input('modelo');
        $repuesto->marca = $request->input('marca');
        $repuesto->poster = $request->input('poster');
        $repuesto->precio = $request->input('precio');
        $repuesto->descripcion = $request->input('descripcion');

        $repuesto->save();
        return redirect('/repuestos');
    }

    public function getCreate()
    {

        return view('repuestos.create');

    }

    public function getPedido()
    {

        return view('repuestos.pedido');

    }

    public function getEdit($id)
    {
        $repuesto = Repuesto::findOrFail($id);
        return view('repuestos.edit', ['repuesto' =>$repuesto,'id' => $id]);
    }

    public function putReservar(Request $request,$id){
        $repuesto = Repuesto::findOrFail($request->id);
        $repuesto->separado=true;
        $repuesto->save();
        notify()->success('Repuesto Reservada con Exito!!');
        return redirect()->action([RepuestosController::class,'getShow'],array('id'=>$id));
    }

    public function putNoreservar(Request $request,$id){
        $repuesto = Repuesto::findOrFail($request->id);
        $repuesto->separado=false;
        $repuesto->save();
        notify()->success('Repuesto nuevamente disponible!!');
        //notify()->emotify('success', '¡Pelicula Agregada!');
        return redirect()->action([RepuestosController::class,'getShow'],array('id'=>$id));
    }

}
