<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[ 0=> ['nome'=>'Fornecedores 1', 'status'=> 's', 'cnpj' => 00]];

        //operador ternário 
        // condição ? se verdade : se falso;

        $msg = isset($fornecedores[0]['cnpj'])? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
