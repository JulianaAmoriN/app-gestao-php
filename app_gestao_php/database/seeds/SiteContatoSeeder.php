<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->name = 'Ana';
        $contato->telefone = '(11) 94998-7896';
        $contato->email = 'ana@gmail.com';
        $contato->motivo_de_contato = 2;
        $contato->mensagem = 'adorei o app';
        $contato->save();

        DB::table('site_contatos')->insert([
            'name' => 'Gael',
            'telefone' => '(13) 48516-6345',
            'email' => 'gael@gmail.com',
            'motivo_de_contato' => 1,
            'mensagem' => 'tem opção mobile?'
         ]);
    }
}
