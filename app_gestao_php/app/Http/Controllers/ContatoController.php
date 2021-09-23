<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivos_de_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclmação'
        ];
        // print_r($request->all());
        // echo  $request->input('name');

        // $contato = new SiteContato();
        // $contato->name = $request->input('name');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_de_contato = $request->input('motivo_de_contato');
        // $contato->mensagem = $request->input('mensagem');

        // $contato->create($request->all());
        // print_r($contato->getAttributes());

        //$contato->save();
        
        return view('site.contato', ['titulo'=>'Contato', 'motivos_de_contatos' => $motivos_de_contatos]);
    }

    public function salvar(Request $request){
        // fazer a validação, antes de enviar
        $request->validate([
            'name' => 'required | min:2',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_de_contato' => 'required',
            'mensage,' => 'required'
        ]);
        //SiteContato::create($request->all());
    }
}
