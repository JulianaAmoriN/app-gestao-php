<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivos_de_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclmação'
        ];

        return view('site.principal',['titulo'=>'Home', 'motivos_de_contatos'=> $motivos_de_contatos]);
    }
}
