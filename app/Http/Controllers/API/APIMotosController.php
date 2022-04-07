<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Moto;
use Illuminate\Http\Request;

class APIMotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Moto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mo = new Moto();
        $mo->nombre = $request->nombre;
        $mo->modelo = $request->modelo;
        $mo->marca = $request->marca;
        $mo->poster= $request->poster;
        $mo->separada = false;
        $mo->cilindraje= $request->cilindraje;
        $mo->precio= $request->precio;
        $mo->descripcion = $request->descripcion;
        $result = $mo->save();
        return response()->json([
        'msg'=>'Moto creada Correctamente!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $moto= Moto::findOrFail($id);
        return $moto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $moto= Moto::findOrFail($id);


        $moto->nombre = $request->nombre;
        $moto->modelo = $request->modelo;
        $moto->marca = $request->marca;
        $moto->poster= $request->poster;
        $moto->cilindraje= $request->cilindraje;
        $moto->precio= $request->precio;
        $moto->descripcion = $request->descripcion;

        $moto->save();

        return response()->json([Moto::findOrFail($id),
        'msg'=>'La Moto ha sido actualizada!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $moto = Moto::findOrFail($id);
        $moto->delete();

        return response()->json(['error'=>false,
        'msg'=>'La Moto ha sido eliminada!']);
    }

    public function putReservar($id)
    {
        //
        $moto = Moto::findOrFail($id);
        $moto->separada=true;
        $moto->save();
        return response()->json(['error'=>false,
        'msg'=>'La Moto ha sido reservada']);
    }


    public function putNoreservar($id)
    {
        //
        $moto = Moto::findOrFail($id);
        $moto->separada=false;
        $moto->save();
        return response()->json(['error'=>false,
        'msg'=>'La Moto ya no esta reservada']);
    }


}
