teste teste 

{{ 'vai de string'}}
<?= 'ambas as tags funcionam iguais' ?>

{{-- Comentário no código --}}

@php
    echo 'oi';
    // comentário de uma linha 
    /*
        comentário com mais de uma linha 
    */

    /*if(){

    }else if(){

    }else{
        
    }*/

@endphp

{{-- @dd($fornecedores); --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores</h3>
@else
    <h3>Não existem fornecedores</h3>
@endif