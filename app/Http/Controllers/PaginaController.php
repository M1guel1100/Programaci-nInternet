<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacto($codigo_id = null)
    {

        if($codigo_id == '1234'){
            $name = "miguel perez";
            $email = "example@example.com";
        }
        else{
            $name = null;
            $email = null;
        }
        return view('paginas.contacto',compact('name','email'));
    }

    public function recibeFormContacto(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:255|min:3',
            'email' => ['required','email'],
            'comentario' => 'required',
        ]);
    }
}
