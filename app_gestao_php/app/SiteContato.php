<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteContato extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'telefone', 'email', 'motivo_contatos_id', 'mensagem'];
}
