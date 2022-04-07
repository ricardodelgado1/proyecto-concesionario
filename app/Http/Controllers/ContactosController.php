<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;



class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $contactos = Contactos::all();
        return view('contactos/index', compact('contactos'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactos/agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $contacto = new Contactos();
       $contacto->nombre = $request->post('nombre');
       $contacto->apellido = $request->post('apellido');
       $contacto->telefono = $request->post('telefono');
       $contacto->email = $request->post('email');
       $contacto->save();
       return redirect()->route('contactos.index')->with('succes','Agregado con Exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto =Contactos::find($id);
        return view('contactos/eliminar', compact('contacto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactos = Contactos::find($id);
        return view('contactos/editar', compact('contactos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto =Contactos::find($id);
        $contacto->nombre = $request->post('nombre');
        $contacto->apellido = $request->post('apellido');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();
        return redirect()->route('contactos.index')->with('succes','Actualizado con Exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contactos::find($id);
        $contacto->delete();
        return redirect()->route('contactos.index')->with('succes','Eliminado con Exito!');
    }
}
