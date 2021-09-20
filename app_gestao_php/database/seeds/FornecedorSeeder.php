<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->name = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email= 'fornecedor1@gmail.com';
        $fornecedor->save();

        //usando método create (atenção para o atributo fillanle de classe usada)
        Fornecedor::create([
           'name' => 'Fornecedor 2',
           'site' => 'fornecedor2.com.br',
           'uf' => 'MG',
           'email' => 'fornecedor2@gmail.com'
        ]);

        //insert, não coloca data pq não passa pelo eloquente
        DB::table('fornecedores')->insert([
           'name' => 'Fornecedor 3',
           'site' => 'fornecedor3.com.br',
           'uf' => 'RS',
           'email' => 'fornecedor3@gmail.com'
        ]);

    }
}
