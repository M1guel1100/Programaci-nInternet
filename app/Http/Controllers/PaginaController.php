<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacto($codigo = null)
    {

        if($codigo == '1234'){
            $nombre = "miguel perez";
            $correo = "example@example.com";
        }
        else{
            $nombre = null;
            $correo = null;
        }
        return view('paginas.contacto',compact('nombre','correo'));
    }

    public function guarda(Request $request)
    {
        $request -> validate([
            'nombre' => 'required', 'min:5',
            'correo' => ['required','email'],
            'comentario' => 'required|min:5',
        ]);
    }
}
