<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;
use Illuminate\Support\Facades\Redirect;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivos_de_contatos = MotivoContato::all();

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
            'name' => 'required | min:2 | unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
