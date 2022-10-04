<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;

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

       /* DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'correo'=> $request->correo,
            'comentario'=>$request->comentario,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        */
        //DB::table('contactos')->insert($request->except('_token'));

        /*$contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();*/

        Contacto::create($request->all());

        return redirect('/contacto');
    

    }
}
