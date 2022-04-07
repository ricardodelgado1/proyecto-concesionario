<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;
use PDF;

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

    public function getPedido()
    {

        return view('motos.pedido');

    }

    public function getEdit($id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.edit', ['moto' =>$moto,'id' => $id]);
    }

    public function putReservar(Request $request,$id){
        $moto = Moto::findOrFail($request->id);
        $moto->separada=true;
        $moto->save();
        notify()->success('Moto Reservada con Exito!!');
        return redirect()->action([MotosController::class,'getShow'],array('id'=>$id));
    }

    public function putNoreservar(Request $request,$id){
        $moto = Moto::findOrFail($request->id);
        $moto->separada=false;
        $moto->save();
        notify()->success('Esta moto ya no esta Reservada!!');
        //notify()->emotify('success', '¡Pelicula Agregada!');
        return redirect()->action([MotosController::class,'getShow'],array('id'=>$id));
    }

    //EVENTOS DEL CARRITO


    public function index_cart()
    {
        $cart_items= \Cart::session(auth()->id())->getContent();
        return view('carrito.indexcarrito', ['cart_items' => $cart_items]);
    }

    public function update_quantity($id)
    {
        $cart_items= \Cart::session(auth()->id())->update($id,['quantity' => 1]);
        return view('carrito.indexcarrito', ['cart_items' => $cart_items]);
    }

    public function delete_cart($cart)
    {
        $cart_items= \Cart::session(auth()->id())->remove($cart);
        $cart_items2= \Cart::session(auth()->id())->getContent();
        

        notify()->success('Eliminado del carrito!!');

        return view('carrito.indexcarrito', ['cart_items' => $cart_items2]);
    }

    public function add_to_cart($id)
    {
        $moto = Moto::findOrFail($id);

        \Cart::session(auth()->id())->add(array(
            'id' => $moto->id,
            'name' => $moto->nombre,
            'price' => $moto->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $moto
        ));
        notify()->success('Moto Agregada al carrito!!');
        return redirect()->action([MotosController::class,'getShow'],array('id'=>$id));
    }





    public function factura(){
        $motos = Moto::all();
        $cart_items= \Cart::session(auth()->id())->getContent();

        $pdf = PDF::loadview('factura',['cart_items'=>$cart_items]);
        return $pdf->stream();
    }


}
