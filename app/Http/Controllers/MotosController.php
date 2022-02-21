<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotosController extends Controller
{
    //
    public function showMoto($id)
    {
        /* $user = User::findOrFail($id); */
        return view('motos.show', ['id' => $id]);
    }
    public function showProfile($id)
    {
       /*   $user = User::findOrFail($id);
        return view('user.profile', ['user' => $user]); */
    }


}
