<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //salvar o nome correto da tabela;
    protected $table = 'fornecedores';
    protected $fillable = ['name', 'site', 'uf', 'email'];
}
