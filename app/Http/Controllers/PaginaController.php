<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacto(){
        return view('paginas.contacto');
    }

    public function recibeFormContacto(Request $request)
    {
        dd($request ->all());
       

    }
}
