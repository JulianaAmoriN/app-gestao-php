<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivos_de_contatos = MotivoContato::all();

        return view('site.principal',['titulo'=>'Home', 'motivos_de_contatos'=> $motivos_de_contatos]);
    }
}
