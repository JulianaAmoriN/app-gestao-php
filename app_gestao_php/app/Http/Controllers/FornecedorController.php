<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[0=> ['nome'=>'Fornecedores 1', 'status'=> 's', 'cnpj' => 00, 'ddd'=> '11' , 'telefone'=> '00000-00001'],
                        1=> ['nome'=>'Fornecedores 2', 'status'=> 's', 'cnpj' => 00, 'ddd'=> '32' , 'telefone'=> '00000-00002'],
                        2=> ['nome'=>'Fornecedores 3', 'status'=> 's', 'cnpj' => 00, 'ddd'=> '55' , 'telefone'=> '00000-00003']];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
